<?php
namespace Foostart\Product\Validators;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class ProductValidator extends AbstractValidator
{
    protected static $rules = array(
        'product_name' => 'required',
        'product_title' => 'required',
        'product_cost' => 'required',
        'product_overview' => 'required',
        'product_description' => 'required',

    );

    protected static $messages = [];


    public function __construct()
    {
        Event::listen('validating', function($input)
        {
        });
        $this->messages();
    }

    public function validate($input) {

        $flag = parent::validate($input);

        $this->errors = $this->errors?$this->errors:new MessageBag();

        $flag = $this->isValidTitle($input)?$flag:FALSE;

        return $flag;
    }


    public function messages() {
        self::$messages = [
            'required' => ':attribute '.trans('product::product.required')
        ];
    }

    public function isValidTitle($input) {

        $flag = TRUE;

        $min_lenght = config('product.length_product_name_min');
        $max_lenght = config('product.length_product_name_max');

        $product_name = @$input['product_name'];

        if ((strlen($product_name) < $min_lenght)  || ((strlen($product_name) > $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('product::product.name_unvalid_length', ['LENGTH_PRODUCT_NAME_MIN' => $min_lenght, 'LENGTH_PRODUCT_NAME_MAX' => $max_lenght]));
            $flag = TRUE;
        }

     
        $product_overview = @$input['product_overview'];
        $min_lenght1 = config('product.length_product_overview_min');
        $max_lenght1 = config('product.length_product_overview_max');
        if ((strlen($product_overview) < $min_lenght1)  || ((strlen($product_overview) > $max_lenght1))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['LENGTH_PRODUCT_OVERVIEW_MIN' => $min_lenght1, 'LENGTH_PRODUCT_OVERVIEW_MAX' => $max_lenght1]));
            $flag = TRUE;
        }
      

        return $flag;
    }
}