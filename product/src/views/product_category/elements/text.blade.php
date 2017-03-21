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
    <!-- PRODUCT CATEGORY NAME -->
    <?php $product_category_name = $request->get('product_titlename') ? $request->get('product_name') : @$product->product_category_name ?>
    {!! Form::label($name, trans('product::product_admin.name').':') !!}
    {!! Form::textarea($name, $product_category_name, ['class' => 'form-control', 'placeholder' => trans('product::product_admin.name').'']) !!}
    <!-- /PRODUCT CATEGORY NAME -->
</div>
