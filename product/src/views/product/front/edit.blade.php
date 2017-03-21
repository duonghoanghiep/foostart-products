
<div class="modal-content">
                <span class="close">&times;</span>
                <div class="booking">
                    <h2>Edit Testimonial
                        <small>Fields marked with an 
                            <span class="red-symbol">*</span> are required
                        </small>
                    </h2> 

<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <div class="panel panel-info">
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
                
                <!-- ERRORS MONEY  -->
                @if($errors->has('product_money') )
                <div class="alert alert-danger">{!! $errors->first('product_money') !!}</div>
                @endif
                <!-- /END ERRORS MONEY  -->
                
                <!-- ERRORS DATE IMPORT  -->
                @if($errors->has('product_date_import') )
                <div class="alert alert-danger">{!! $errors->first('product_date_import') !!}</div>
                @endif
                <!-- /END ERRORS DATE IMPORT  -->
                
                <!-- ERRORS DATE EXPORT  -->
                @if($errors->has('product_date_export') )
                <div class="alert alert-danger">{!! $errors->first('product_date_export') !!}</div>
                @endif
                <!-- /END ERRORS DATE EXPORT  -->
                
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
                            
                            {!! Form::open(['route'=>['product.post', 'id' => @$product->product_id],  'files'=>true, 'method' => 'post'])  !!}


                            <!-- PRODUCT  TEXT-->
                            @include('product::product.elements.text', ['name' => 'product_name','title' => 'product_title','money' => 'product_money','date_import' => 'product_date_import','date_export' => 'product_date_export'])
                            <!-- /END PRODUCT  TEXT -->
                            {!! Form::hidden('id',@$product->product_id) !!}

                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('product.delete',['id' => @$product->id, '_token' => csrf_token()]) !!}"
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
</div></div></div>
