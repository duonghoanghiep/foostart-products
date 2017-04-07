@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
{{ trans('product::product.page_list') }}
@stop

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="col-md-8">

            <div class="panel panel-info">

                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin"><i class="fa fa-group"></i> {!! $request->all() ? trans('product::product.page_search') : trans('product::product.page_list') !!}</h3>
                </div>
                
                <!--MESSAGE-->
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                <div class="alert alert-success flash-message">{!! $message !!}</div>
                @endif
                <!--MESSAGE-->

                <!--ERRORS-->
                @if($errors && ! $errors->isEmpty() )
                @foreach($errors->all() as $error)
                <div class="alert alert-danger flash-message">{!! $error !!}</div>
                @endforeach
                @endif 
                <!--ERRORS-->
                <div class="panel-body">
                    @include('product::product.admin.product_item')
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('product::product.admin.product_search')
        </div>
    </div>
</div>
@stop

@section('footer_scripts')
<script>
    $(".delete").click(function () {
        return confirm("Bạn có chắc chắn xóa sản phẩm này?");
    });
</script>
@stop