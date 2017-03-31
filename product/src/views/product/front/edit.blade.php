
            
            {!! Form::open(['route'=>['product.post', 'id' => @$product->product_id],  'files'=>true, 'method' => 'post'])  !!}


                            <!-- PRODUCT  TEXT-->
                            @include('product::product.elements.text', ['name' => 'product_name','title' => 'product_title','cost' => 'product_cost','overview' => 'product_overview','description' => 'product_description'])
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
  