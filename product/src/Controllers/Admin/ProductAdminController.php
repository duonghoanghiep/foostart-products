<?php

namespace Foostart\Product\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Product\Models\Products;
/**
 * Validators
 */

use Foostart\Product\Validators\ProductValidator;

class ProductAdminController extends Controller {
    public $data = array();
    private $obj_product = NULL;

    public function __construct() {
        $this->obj_product = new Products();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {
        $params = $request->all();

        $list_product = $this->obj_product->get_products($params);


        $this->data = array_merge($this->data, array(
            'products' => $list_product,
            'request' => $request,
            'params' => $params
        ));
        return view('product::product.admin.product_list', $this->data);
    }

    /**
     *
     * @return type
     */
    public function edit(Request $request) {

        $product = NULL;
        $product_id = (int) $request->get('id');

        if (!empty($product_id) && (is_int($product_id))) {
            $product = $this->obj_product->find($product_id);
        }

        $this->data = array_merge($this->data, array(
            'product' => $product,
            'request' => $request
        ));
        return view('product::product.admin.product_edit', $this->data);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request) {

        $this->obj_product_validator = new ProductValidator();

        $input = $request->all();

        $product_id = (int) $request->get('id');
        $product = NULL;

        $data = array();

        if (!$this->obj_product_validator->validate($input)) {

            $data['errors'] = $this->obj_product_validator->getErrors();

            if (!empty($product_id) && is_int($product_id)) {

                $product = $this->obj_product->find($product_id);
            }
        } else {
            if (!empty($product_id) && is_int($product_id)) {

                $product = $this->obj_product->find($product_id);

                if (!empty($product)) {

                    $input['product_id'] = $product_id;
                    $product = $this->obj_product->update_product($input);

                    //Message
                    \Session::flash('message', trans('product::product.message_update_successfully'));
                    return Redirect::route("admin_product.edit", ["id" => $product->product_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('product::product.message_update_unsuccessfully'));
                }
            } else {

                $product = $this->obj_product->add_product($input);

                if (!empty($product)) {

                    //Message
                    \Session::flash('message', trans('product::product.message_add_successfully'));
                    return Redirect::route("admin_product.edit", ["id" => $product->product_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('product::product.message_add_unsuccessfully'));
                }
            }
        }

        $this->data = array_merge($this->data, array(
            'product' => $product,
            'request' => $request,
                ), $data);

        return view('product::product.admin.product_edit', $this->data);
    }

    /**
     *
     * @return type
     */
    public function delete(Request $request) {

        $product = NULL;
        $product_id = $request->get('id');

        if (!empty($product_id)) {
            $product = $this->obj_product->find($product_id);

            if (!empty($product)) {
                //Message
                \Session::flash('message', trans('product::product.message_delete_successfully'));

                $product->delete();
            }
        } else {

        }

        $this->data = array_merge($this->data, array(
            'product' => $product,
        ));

        return Redirect::route("admin_product");
    }

}
