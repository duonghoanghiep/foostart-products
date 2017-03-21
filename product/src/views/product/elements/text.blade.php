<!DOCTYPE html>
<html>
    <head>
        <script src='//cloud.tinymce.com/stable/tinymce.min.js'></script>
        <script>
            tinymce.init({
                selector: 'textarea', // change this value according to your HTML
                plugin: 'a_tinymce_plugin',
                a_plugin_option: true,
                a_configuration_option: 400
            });
        </script>
    </head>

    <body>
     
    </body>
</html>

<div class="form-group">
    <!-- PRODUCT NAME -->
    <?php $product_name = $request->get('product_titlename') ? $request->get('product_name') : @$product->product_name ?>
    {!! Form::label($name, trans('product::product_admin.name').':') !!}
    {!! Form::textarea($name, $product_name, ['class' => 'form-control', 'placeholder' => trans('product::product_admin.name').'']) !!}
    <!-- /PRODUCT NAME -->
     
    <!-- PRODUCT TITLE -->
    <?php $product_title = $request->get('product_titledes') ? $request->get('product_title') : @$product->product_title ?>
    {!! Form::label($title, trans('product::product_admin.title').':') !!}
    {!! Form::textarea($title, $product_title, ['class' => 'form-control', 'placeholder' => trans('product::product_admin.title').'']) !!}
    <!-- /PRODUCT TITLE -->
     
    <!-- PRODUCT MONEY -->
    <?php $product_money = $request->get('product_titlename') ? $request->get('product_money') : @$product->product_money ?>
    {!! Form::label($money, trans('product::product_admin.money').':') !!}
    {!! Form::textarea($money, $product_money, ['class' => 'form-control', 'placeholder' => trans('product::product_admin.money').'']) !!}
    <!-- /PRODUCT MONEY -->
    
     <!-- PRODUCT DATE IMPORT -->
    <?php $product_date_import = $request->get('product_titledes') ? $request->get('product_date_import') : @$product->product_date_import ?>
    {!! Form::label($date_import, trans('product::product_admin.date_import').':') !!}
    {!! Form::textarea($date_import, $product_date_import, ['class' => 'form-control', 'placeholder' => trans('product::product_admin.date_import').'']) !!}
    <!-- /PRODUCT DATE IMPORT -->
     
    <!-- PRODUCT DATE EXPORT -->
    <?php $product_date_export = $request->get('product_titlename') ? $request->get('product_date_export') : @$product->product_date_export ?>
    {!! Form::label($date_export, trans('product::product_admin.date_export').':') !!}
    {!! Form::textarea($date_export, $product_date_export, ['class' => 'form-control', 'placeholder' => trans('product::product_admin.date_export').'']) !!}
     <!-- /PRODUCT DATE EXPORT -->
</div>
