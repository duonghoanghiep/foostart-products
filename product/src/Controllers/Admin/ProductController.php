<?php namespace Foostart\Product\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
/**
 * Validators
 */

class ProductController extends Controller {

    public $data = array();
    public $authentication = NULL;
    public $is_members = FALSE;
    public $current_user = NULL;

    public $obj_product_validator = NULL;

    public function __construct() {
    }

    public function addFlashMessage($message_key, $message_value) {
        \Session::flash('message', trans('product::product.message_add_successfully'));
    }

    public function isAuthentication() {

        $this->authentication = \App::make('authenticator');
        $this->current_user = $this->authentication->getLoggedUser();
        if ($this->current_user) {
            $this->is_members = TRUE;
        }
        $this->data = array(
            'is_members' => $this->is_members,
            'current_user' => $this->current_user,
        );
    }


}