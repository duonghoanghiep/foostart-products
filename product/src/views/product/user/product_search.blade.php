
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i><?php echo trans('product::product.page_search') ?></h3>
    </div>
    <div class="panel-body">

        {!! Form::open(['route' => 'admin_product','method' => 'get']) !!}

        <!--TITLE-->
        <div class="form-group">
            {!! Form::label('product_cost', trans('product::product.product_name_label')) !!}
            {!! Form::text('product_cost', @$params['product_cost'], ['class' => 'form-control', 'placeholder' => trans('product::product.product_name_placeholder')]) !!}
       
        
        
        </div>
        <!--/END TITLE-->

        {!! Form::submit(trans('product::product.search').'', ["class" => "btn btn-info pull-right"]) !!}
        {!! Form::close() !!}
    </div>
</div>


