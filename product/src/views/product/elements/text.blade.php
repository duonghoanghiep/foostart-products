

<div class="form-group">
    <!-- PRODUCT NAME -->
    <?php $product_name = $request->get('product_titlename') ? $request->get('product_name') : @$product->product_name ?>
    {!! Form::label($name, trans('product::product.name').':') !!}
    {!! Form::text($name, $product_name, ['class' => 'form-control', 'placeholder' => trans('product::product.name').'']) !!}
    <!-- /PRODUCT NAME -->
     
    <!-- PRODUCT TITLE -->
    <?php $product_title = $request->get('product_titledes') ? $request->get('product_title') : @$product->product_title ?>
    {!! Form::label($title, trans('product::product.title').':') !!}
    {!! Form::text($title, $product_title, ['class' => 'form-control', 'placeholder' => trans('product::product.title').'']) !!}
    <!-- /PRODUCT TITLE -->
     
    <!-- PRODUCT COST -->
    <?php $product_cost = $request->get('product_titlename') ? $request->get('product_cost') : @$product->product_cost ?>
    {!! Form::label($cost, trans('product::product.cost').':') !!}
    {!! Form::text($cost, $product_cost, ['class' => 'form-control', 'placeholder' => trans('product::product.cost').'']) !!}
    <!-- /PRODUCT COST -->
    
     <!-- PRODUCT OVERVIEW -->
    <?php $product_overview = $request->get('product_titledes') ? $request->get('product_overview') : @$product->product_overview ?>
    {!! Form::label($overview, trans('product::product.overview').':') !!}
    {!! Form::text($overview, $product_overview, ['class' => 'form-control', 'placeholder' => trans('product::product.overview').'']) !!}
    <!-- /PRODUCT OVERVIEW -->
     
    <!-- PRODUCT DESCRIPTION -->
    <?php $product_description = $request->get('product_titlename') ? $request->get('product_description') : @$product->product_description ?>
    {!! Form::label($description, trans('product::product.description').':') !!}
    {!! Form::text($description, $product_description, ['class' => 'form-control', 'placeholder' => trans('product::product.description').'']) !!}
     <!-- /PRODUCT DESCRIPTION -->
</div>
