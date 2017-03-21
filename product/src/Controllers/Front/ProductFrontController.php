<?php

namespace Foostart\Product\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Product\Models\Products;
use Foostart\Product\Validators\ProductAdminValidator;
class ProductFrontController extends Controller
{
     public $data_view = array();
    private $obj_validator = NULL;
    private $obj_product = NULL;
   public function __construct() {
        $this->obj_product = new Products();
    }

    public function index(Request $request)
    {

        $obj_product = new Products();
        $products = $obj_product->get_products();
        $this->data = array(
            'request' => $request,
            'products' => $products
        );
        return view('product::product.front.index', $this->data);
    }
    public function setform(Request $request) {
        $obj_product = new Products();
        $products = $obj_product->get_products();
        $this->data = array(
            'request' => $request,
            'products' => $products
        );
        return view('product::product.front.index', $this->data);
    }
    public function edit(Request $request) {
        $product = NULL;
        $product_id = (int) $request->get('id');

        if (!empty($product_id) && (is_int($product_id))) {
            $product = $this->obj_product->find($product_id);
        }

        $this->data_view = array_merge($this->data_view, array(
            'product' => $product,
            'request' => $request
        ));
        return view('product::product.front.edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request) {
        $obj_product = new Products();
        $products = $obj_product->get_products();
        $this->obj_validator = new ProductAdminValidator();

        $input = $request->all();

        $product_id = (int) $request->get('id');
        $product = NULL;

        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

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
                    \Session::flash('message', trans('product::product_admin.message_update_successfully'));
                    return Redirect::route("product");
                } else {

                    //Message
                    \Session::flash('message', trans('product::product_admin.message_update_unsuccessfully'));
                }
            } else {

                $product = $this->obj_product->add_product($input);

                if (!empty($product)) {

                    //Message
                    \Session::flash('message', trans('product::product_admin.message_add_successfully'));
                    return Redirect::route("product");
                } else {

                    //Message
                    \Session::flash('message', trans('product::product_admin.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'products' => $products,
            'request' => $request,
                ), $data);

        return view('product::product.front.edit', $this->data_view);
    }

    public function delete(Request $request) {

        $product = NULL;
        $product_id = $request->get('id');

        if (!empty($product_id)) {
            $product = $this->obj_product->find($product_id);

            if (!empty($product)) {
                //Message
                \Session::flash('message', trans('product::product_admin.message_delete_successfully'));

                $product->delete();
            }
        } else {
            
        }

        $this->data_view = array_merge($this->data_view, array(
            'product' => $product,
        ));

        return Redirect::route("product");
    }

}