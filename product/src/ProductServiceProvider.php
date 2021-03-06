<?php

namespace Foostart\Product;

use Illuminate\Support\ServiceProvider;
use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;

use URL, Route;
use Illuminate\Http\Request;


class ProductServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request) {
        /**
         * Publish
         */
         $this->publishes([
            __DIR__.'/config/product.php' => config_path('product.php'),
        ],'config');

        $this->loadViewsFrom(__DIR__ . '/views', 'product');


        /**
         * Translations
         */
         $this->loadTranslationsFrom(__DIR__.'/lang', 'product');

         $this->publishes([
        __DIR__.'/public' => public_path('foostart'),
    ], 'public');


        /**
         * Load view composer
         */
        $this->productViewComposer($request);

         $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations')
            ], 'migrations');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';

        /**
         * Load controllers
         */
        $this->app->make('Foostart\Product\Controllers\Admin\ProductAdminController');
        $this->app->make('Foostart\Product\Controllers\Front\ProductFrontController');
      $this->app->make('Foostart\Product\Controllers\User\ProductUserController');
         /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'product');
    }

    /**
     *
     */
    public function productViewComposer(Request $request) {

        view()->composer('product::product*', function ($view) {
            global $request;
            $product_id = $request->get('id');
            $is_action = empty($product_id)?'page_add':'page_edit';

            $view->with('sidebar_items', [

                /**
                 * Products
                 */
                //list
                trans('product::product.page_list') => [
                    'url' => URL::route('admin_product'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //add
                trans('product::product.'.$is_action) => [
                    'url' => URL::route('admin_product.edit'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],



                /**
                 * Categories
                 */
                //list
                trans('product::product.page_category_list') => [
                    'url' => URL::route('admin_product_category'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
            ]);
            //
        });
    }

}
