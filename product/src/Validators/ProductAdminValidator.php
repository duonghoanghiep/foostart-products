<?php
namespace Foostart\Product\Validators;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class ProductAdminValidator extends AbstractValidator
{
    protected static $rules = array(
        'product_name' => 'required',
        'product_title' => 'required',
        'product_money' => 'required',
        'product_date_import' => 'required',
        'product_date_export' => 'required',
        
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
            'required' => ':attribute '.trans('product::product_admin.required')
        ];
    }

    public function isValidTitle($input) {

        $flag = TRUE;

        $min_lenght = config('product_admin.name_min_length');
        $max_lenght = config('product_admin.name_max_length');

        $product_name = @$input['product_name'];

        if ((strlen($product_name) < $min_lenght)  || ((strlen($product_name) > $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }
        
        $product_title = @$input['product_title'];

        if ((strlen($product_title) < $min_lenght)  || ((strlen($product_title) > $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }
        $product_money = @$input['product_money'];

        if ((strlen($product_money) < $min_lenght)  || ((strlen($product_money) > $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }
        $product_date_import = @$input['product_date_import'];

        if ((strlen($product_date_import) < $min_lenght)  || ((strlen($product_date_import) > $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }
        $product_date_export = @$input['product_date_export'];

        if ((strlen($product_date_export) < $min_lenght)  || ((strlen($product_date_export) > $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }

        return $flag;
    }
}