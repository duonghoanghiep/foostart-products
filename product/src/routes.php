<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('product', [
    'as' => 'product',
    'uses' => 'Foostart\Product\Controllers\Front\ProductFrontController@index'
]);
Route::post('producter', [
    'as' => 'producter',
    'uses' => 'Foostart\Product\Controllers\Front\ProductFrontController@add'
]);

 /* edit-add
         */
        Route::get('product/edit', [
            'as' => 'product.edit',
            'uses' => 'Foostart\Product\Controllers\Front\ProductFrontController@edit'
        ]);
        /**
         * post
         */
        Route::post('product/edit', [
            'as' => 'product.post',
            'uses' => 'Foostart\Product\Controllers\Front\ProductFrontController@post'
        ]);
 /**
         * delete
         */
        Route::get('product/delete', [
            'as' => 'product.delete',
            'uses' => 'Foostart\Product\Controllers\Front\ProductFrontController@delete'
        ]);
        



/**
 * USER 
 */
Route::group(['middleware' => ['web'], 'namespace' => 'Foostart\Product\Controllers\Admin'], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {

        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
        /**
         * list
         */
        Route::get('admin/product', [
            'as' => 'admin_product',
            'uses' => 'ProductAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/product/edit', [
            'as' => 'admin_product.edit',
            'uses' => 'ProductAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/product/edit', [
            'as' => 'admin_product.post',
            'uses' => 'ProductAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/product/delete', [
            'as' => 'admin_product.delete',
            'uses' => 'ProductAdminController@delete'
        ]);
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
/**
        
        


        
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////CATEGORIES///////////////////////////////
        ////////////////////////////////////////////////////////////////////////**/
         Route::get('admin/product_category', [
            'as' => 'admin_product_category',
            'uses' => 'ProductCategoryAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/product_category/edit', [
            'as' => 'admin_product_category.edit',
            'uses' => 'ProductCategoryAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/product_category/edit', [
            'as' => 'admin_product_category.post',
            'uses' => 'ProductCategoryAdminController@post'
        ]);
         /**
         * delete
         */
        Route::get('admin/product_category/delete', [
            'as' => 'admin_product_category.delete',
            'uses' => 'ProductCategoryAdminController@delete'
        ]);
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////CATEGORIES///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
    });
});

////////////////////////////////////////////////////////////////////////
        ////////////////////////////USER///////////////////////////////
        ////////////////////////////////////////////////////////////////////////


Route::group(['middleware' => ['web'], 'namespace' => 'Foostart\Product\Controllers\User'], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {

        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
        /**
         * list
         */
        Route::get('user/product', [
            'as' => 'user_product',
            'uses' => 'ProductUserController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('user/product/edit', [
            'as' => 'user_product.edit',
            'uses' => 'ProductUserController@edit'
        ]);

        /**
         * post
         */
        Route::post('user/product/edit', [
            'as' => 'user_product.post',
            'uses' => 'ProductUserController@post'
        ]);

        /**
         * delete
         */
        Route::get('user/product/delete', [
            'as' => 'user_product.delete',
            'uses' => 'ProductUserController@delete'
        ]);
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
/**
        
        


        
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////CATEGORIES///////////////////////////////
        ////////////////////////////////////////////////////////////////////////**/
         Route::get('admin/product_category', [
            'as' => 'admin_product_category',
            'uses' => 'ProductCategoryAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/product_category/edit', [
            'as' => 'admin_product_category.edit',
            'uses' => 'ProductCategoryAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/product_category/edit', [
            'as' => 'admin_product_category.post',
            'uses' => 'ProductCategoryAdminController@post'
        ]);
         /**
         * delete
         */
        Route::get('admin/product_category/delete', [
            'as' => 'admin_product_category.delete',
            'uses' => 'ProductCategoryAdminController@delete'
        ]);
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////CATEGORIES///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
    });
});
