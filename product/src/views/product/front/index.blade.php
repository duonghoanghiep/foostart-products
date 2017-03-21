<html>

<head>
    <title>title</title>

    <link href="{{asset('foostart/css/Cata_BDS.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('foostart/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('foostart/css/properties_BDS.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('foostart/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    

</head>

<body>
    <section class="page-title">
        <div class="auto-container">
            <div class="content-box">
                <h1>List BDS</h1>
                <div class="bread-crumb">
                    <ul class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Archive for January, 2016</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--ADD  ITEM-->
<div class="row margin-bottom-12">
    <div class="col-md-12">
        <a href="{!! URL::route('product.edit') !!}" class="btn btn-info pull-right">
            <i class="fa fa-plus"></i>{{trans('product::product_admin.product_add_button')}}
        </a>
    </div>
</div>
<!--/END ADD  ITEM-->
    <section class="sidebar-page">
        <div class="container">

            <div class="row">
                <div class="tab-content col-md-12 col-sm-12 col-xs-12">
                    <!-- All -->
                     <?php foreach ($products as $product): ?>
                    <div class=" tab-pane fade in active" id="All">
                        <div class="featured_houses_block col-md-4 col-sm-6 col-xs-12">
                            <div style="position:relative">
                                <a href="#" target="_self"> <img src="foostart/images/32.jpg" alt="Avenel House" border="0"></a>
                                <div class="col_rent">
                                    For sale </div>
                                <!-- col_rent -->
                            </div>
                            <div class="feature_texthouse">
                                <h4 class="featured_houses_title">
                                        <a href="#" target="_self"><?php echo $product['product_name'] ?></a>        </h4>
                                <div class="featured_houses_location"><i class="fa fa-map-marker"></i> USA, Avenel&nbsp;</div>
                                <div class="featured_houses_category">
                                    <i class="fa fa-tag"></i>
                                    <a href="#" class="category">
                                            Apartment</a>
                                </div>
                                <div class="featured_houses_size featured_houses_inline"><i class="fa fa-expand"></i> 3500&nbsp;Sqrt</div>
                                <div class="featured_houses_rooms featured_houses_inline"><i class="fa fa-building-o"></i> Rooms: 4&nbsp;</div>
                                <div class="featured_houses_year featured_houses_inline"><i class="fa fa-tint"></i> Built year: 2004&nbsp;</div>
                                <div class="featured_houses_bedrooms featured_houses_inline"><i class="fa fa-inbox"></i> Bedrooms: 2&nbsp;</div>
                                <div class="featured_houses_hits featured_houses_inline"><i class="fa fa-eye"></i> Hits: 162</div>
                            </div>
                            <div class="rem_house_viewlist">
                                <a href="#" target="_self" style="display: block">
                                    <div class="featured_houses_price ">7.000.000,00&nbsp;USD</div>
                                    <div class="featured_houses_viewlisting">View listing</div>
                                    <a href="{!! URL::route('product.delete',['id' =>  $product->product_id, '_token' => csrf_token()]) !!}" class="btn btn-danger pull-right margin-left-5 delete">Delete</a>                    
                                    <a href="{!! URL::route('product.edit', ['id' => $product->product_id]) !!}"class = "btn btn-info pull-right">Edit</a>
               
                <span class="clearfix"></span>
            </td>
                                    
                                </a>
                                <div style="clear: both;"></div>
                            </div>
                        </div>

                  
                    </div>
                    <?php endforeach; ?>
                    <div class="pager-outer container">
                        <ul class="pagination col-md-12">
                            <ul class="pagination">
                                <li><span class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="next page-numbers" href="#">»</a></li>
                            </ul>
                        </ul>
                    </div>
                </div>

                <div>&nbsp;</div>
            </div>

        </div>
    </section>
</body>

</html>