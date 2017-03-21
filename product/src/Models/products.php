<?php

namespace Foostart\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {

    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'product_name',
        'product_title',
        'product_money',
        'product_date_import',
        'product_date_export'
        
    ];
    protected $primaryKey = 'product_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_products($params = array()) {
        $eloquent = self::orderBy('product_id');

        //product_name
        if (!empty($params['product_name'])) {
            $eloquent->where('product_name', 'like', '%' . $params['product_name'] . '%');
        }
        //product_title
        if (!empty($params['product_title'])) {
            $eloquent->where('product_title', 'like', '%' . $params['product_title'] . '%');
        }
        //product_money
        if (!empty($params['product_money'])) {
            $eloquent->where('product_money', 'like', '%' . $params['product_money'] . '%');
        }
        //product_date_import
        if (!empty($params['product_date_import'])) {
            $eloquent->where('product_date_import', 'like', '%' . $params['product_date_import'] . '%');
        }
        //product_date_export
        if (!empty($params['product_date_export'])) {
            $eloquent->where('product_date_export', 'like', '%' . $params['product_date_export'] . '%');
        }
        

        $products = $eloquent->paginate(10); //TODO: change number of item per page to configs

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
            $product->product_money = $input['product_money'];
            $product->product_date_import = $input['product_date_import'];
            $product->product_date_export = $input['product_date_export'];
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
                    'product_money' => $input['product_money'],
                    'product_date_import' => $input['product_date_import'],
                    'product_date_export' => $input['product_date_export'],
                    
        ]);
        return $product;
    }

}
