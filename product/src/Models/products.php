<?php

namespace Foostart\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {

    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'product_name',
        'product_title',
        'product_cost',
        'product_overview',
        'product_description'
        
    ];
    protected $primaryKey = 'product_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_products($params = array()) {
        $eloquent = self::orderBy('product_id', 'DESC');

        //product_name
        if (!empty($params['product_name'])) {
            $eloquent->where('product_name', 'like', '%' . $params['product_name'] . '%');
        }
        
        //product_id
        if (!empty($params['product_id'])) {
            $eloquent->where('product_id', 'like', '%' . $params['product_id'] . '%');
        }


        $products = $eloquent->paginate(3); //TODO: change number of item per page to configs

        return $products;
    }

    /**
     *
     * @param type $input
     * @param type $product_id
     * @return type
     */
    public function update_product($input, $product_id = NULL) {

        if (empty($product_id)) {
            $product_id = $input['product_id'];
        }

        $product = self::find($product_id);

        if (!empty($product)) {

            $product->product_name = $input['product_name'];
            $product->product_title = $input['product_title'];
            $product->product_cost = $input['product_cost'];
            $product->product_overview = $input['product_overview'];
            $product->product_description = $input['product_description'];
            $product->save();

            return $product;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_product($input) {

        $product = self::create([
                    'product_name' => $input['product_name'],
                    'product_title' => $input['product_title'],
                    'product_cost' => $input['product_cost'],
                    'product_overview' => $input['product_overview'],
                    'product_description' => $input['product_description'],
                    
        ]);
        return $product;
    }

}
