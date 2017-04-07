@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
{{ trans('product::product.page_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($product->product_id) ? '<i class="fa fa-pencil"></i>'.trans('product::product.form_edit') : '<i class="fa fa-users"></i>'.trans('product::product.form_add') !!}
                    </h3>
                </div>

                {{-- model general errors from the form --}}
                <!-- ERRORS NAME  -->
                @if($errors->has('product_name') )
                <div class="alert alert-danger">{!! $errors->first('product_name') !!}</div>
                @endif
                <!-- /END ERRORS NAME  -->
                
                <!-- ERRORS TITLE  -->
                @if($errors->has('product_title') )
                <div class="alert alert-danger">{!! $errors->first('product_title') !!}</div>
                @endif
                <!-- /END ERRORS TITLE  -->
                
                <!-- ERRORS COST  -->
                @if($errors->has('product_cost') )
                <div class="alert alert-danger">{!! $errors->first('product_cost') !!}</div>
                @endif
                <!-- /END ERRORS COST  -->
                
                <!-- ERRORS OVERVIEW  -->
                @if($errors->has('product_overview') )
                <div class="alert alert-danger">{!! $errors->first('product_overview') !!}</div>
                @endif
                <!-- /END ERRORS OVERVIEW  -->
                
                <!-- ERRORS DESCRIPTION  -->
                @if($errors->has('product_description') )
                <div class="alert alert-danger">{!! $errors->first('product_description') !!}</div>
                @endif
                <!-- /END ERRORS DESCRIPTION  -->
                
                <!-- LENGTH NAME  -->
                @if($errors->has('name_unvalid_length') )
                <div class="alert alert-danger">{!! $errors->first('name_unvalid_length') !!}</div>
                @endif
                <!-- /END LENGTH NAME -->
                
                {{-- successful message --}}
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                <div class="alert alert-success">{{$message}}</div>
                @endif

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <h4>{!! trans('product::product.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['user_product.post', 'id' => @$product->product_id],  'files'=>true, 'method' => 'post'])  !!}


                            <!-- PRODUCT  TEXT-->
                            @include('product::product.elements.text', ['name' => 'product_name','title' => 'product_title','cost' => 'product_cost','overview' => 'product_overview','description' => 'product_description'])
                            <!-- /END PRODUCT  TEXT -->
                            {!! Form::hidden('id',@$product->product_id) !!}

                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('user_product.delete',['id' => @$product->id, '_token' => csrf_token()]) !!}"
                               class="btn btn-danger pull-right margin-left-5 delete">
                                Delete
                            </a>
                            <!-- DELETE BUTTON -->

                            <!-- SAVE BUTTON -->
                            {!! Form::submit('Save', array("class"=>"btn btn-info pull-right ")) !!}
                            <!-- /SAVE BUTTON -->

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop