<html>

    <head>
        <title>title</title>

        <link href="{{asset('foostart/css/Cata_BDS.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('foostart/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('foostart/css/properties_BDS.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('foostart/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('foostart/css/front.css')}}" rel="stylesheet" type="text/css"/>


        <script src="{{asset('foostart/js/jquery-1.11.0.min.js')}}" type="text/javascript"></script>


        <script src="{{asset('foostart/js/front.js')}}" type="text/javascript"></script>

        <link href="{{asset('foostart/css/nivo-slider.css')}}" rel="stylesheet" type="text/css"/>

        <script src="{{asset('foostart/js/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('foostart/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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

            <div style="    width: 50%;
                 /* display: inline; */
                 float: right;  ">
                <button id="myBtn" class="btn" style="margin-left: 71%;">Add Product</button>
                <button id="myBtner" class="btner" style="float: right;margin-right: 3%;">Seach</button>
                            
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
                                            <div class="featured_houses_price ">7000000 &nbsp;USD </div>
                                            <div class="featured_houses_viewlisting">View listing</div>

                                        </a>

                                        <div style="clear: both;"></div>
                                    </div>
                                </div>


                            </div>
                        <?php endforeach; ?>

                        <div class="pager-outer container">
                            <div class="pagination col-md-12">
                                <ul class="pagination" style="text-align: center;width: 100%;"  >


                                    {!! $products->appends($request->except(['page']) )->render() !!}


                                </ul>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </section>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p style="text-align: center;">HAVE YOU THINK BEFORE YOU DO ?</p>

                {!! Form::open([ 'method' => 'post',
                'route' => 'producter',

                'files'=>false])!!}
                <!-- PRODUCT  TEXT-->
                @include('product::product.elements.text', ['name' => 'product_name','title' => 'product_title','cost' => 'product_cost','overview' => 'product_overview','description' => 'product_description'])
                <!-- /END PRODUCT  TEXT -->
                {!! Form::hidden('id',@$product->product_id) !!}



                <!-- SAVE BUTTON -->
                {!! Form::submit('Save', array("class"=>"btn btn-info pull-right ")) !!}
                <!-- /SAVE BUTTON -->

                {!! Form::close() !!}

            </div>
        </div>
        
        
        
     

<style>
/* The Modal (background) */
.modaler {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 9999; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-contenter {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.closeer {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.closeer:hover,
.closeer:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>




<!-- The Modal -->
<div id="myModaler" class="modaler">

  <!-- Modal content -->
  <div class="modal-contenter">
    <span class="closeer">&times;</span>
    <p style="font-size: 15px;">Search something you want..</p>
    <div>
        
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i><?php echo trans('product::product_admin.page_search') ?></h3>
    </div>
    <div class="panel-body">
        
        <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home" style="color:black;">Search Name</a></li>
    <li><a data-toggle="tab" href="#menu1" style="color:black;">Search ID</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      {!! Form::open(['route' => 'product','method' => 'get']) !!}

        <!--TITLE-->
        <div class="form-group">
            {!! Form::label('product_name', trans('product::product_admin.product_name_label')) !!}
            {!! Form::text('product_name', @$params['product_name'], ['class' => 'form-control', 'placeholder' => trans('product::product_admin.product_name_placeholder')]) !!}
       
         
        </div>
        <!--/END TITLE-->

        {!! Form::submit(trans('product::product_admin.search').'', ["class" => "btn btn-info pull-right"]) !!}
        {!! Form::close() !!}
    </div>
    <div id="menu1" class="tab-pane fade">
      {!! Form::open(['route' => 'product','method' => 'get']) !!}

        <!--TITLE-->
        <div class="form-group">
            {!! Form::label('product_id', trans('product::product_admin.product_id_label')) !!}
            {!! Form::text('product_id', @$params['product_id'], ['class' => 'form-control', 'placeholder' => trans('product::product_admin.product_id_placeholder')]) !!}
       
         
        </div>
        <!--/END TITLE-->

        {!! Form::submit(trans('product::product_admin.search').'', ["class" => "btn btn-info pull-right"]) !!}
        {!! Form::close() !!}
    </div>
  </div>
    </div>
   
  </div>
        
    </div>
</div>



    </div>

  

<script>
// Get the modal
var modal = document.getElementById('myModaler');

// Get the button that opens the modal
var btn = document.getElementById("myBtner");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeer")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outsside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


         

    </body>

</html>