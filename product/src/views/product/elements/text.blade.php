<!DOCTYPE html>
<html>
    <head>
       <script src='//cloud.tinymce.com/stable/tinymce.min.js'></script>
        <script>
            tinymce.init({
  selector: 'textarea',
  plugins: 'image code',
 plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ],
  toolbar: 'undo redo | link image | code',
  // enable title field in the Image dialog
  image_title: true, 
  // enable automatic uploads of images represented by blob or data URIs
  automatic_uploads: true,
  
 images_upload_credentials: true,
   
  images_upload_url: 'post.php',
  // here we add custom filepicker only to Image dialog
  
  images_reuse_filename: true,
  file_picker_types: 'image', 
  // and here's our custom image picker
  file_picker_callback: function(cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'foostart/images/*');
    
    
    input.onchange = function() {
      var file = this.files[0];
      
    
      var id = 'blobid' + (new Date()).getTime();
      var blobCache = tinymce.activeEditor.editorUpload.blobCache;
      var blobInfo = blobCache.create(id, file);
      blobCache.add(blobInfo);
      
   
      cb(blobInfo.blobUri(), { title: file.name });
    };
    
    input.click();
  }
});
        </script>
    </head>

    <body>
     
    </body>
</html>

<div class="form-group">
    <!-- PRODUCT NAME -->
    <?php $product_name = $request->get('product_titlename') ? $request->get('product_name') : @$product->product_name ?>
    {!! Form::label($name, trans('product::product.name').':') !!}
    {!! Form::textarea($name, $product_name, ['class' => 'form-control', 'placeholder' => trans('product::product.name').'']) !!}
    <!-- /PRODUCT NAME -->
     
    <!-- PRODUCT TITLE -->
    <?php $product_title = $request->get('product_titledes') ? $request->get('product_title') : @$product->product_title ?>
    {!! Form::label($title, trans('product::product.title').':') !!}
    {!! Form::textarea($title, $product_title, ['class' => 'form-control', 'placeholder' => trans('product::product.title').'']) !!}
    <!-- /PRODUCT TITLE -->
     
    <!-- PRODUCT COST -->
    <?php $product_cost = $request->get('product_titlename') ? $request->get('product_cost') : @$product->product_cost ?>
    {!! Form::label($cost, trans('product::product.cost').':') !!}
    {!! Form::textarea($cost, $product_cost, ['class' => 'form-control', 'placeholder' => trans('product::product.cost').'']) !!}
    <!-- /PRODUCT COST -->
    
     <!-- PRODUCT OVERVIEW -->
    <?php $product_overview = $request->get('product_titledes') ? $request->get('product_overview') : @$product->product_overview ?>
    {!! Form::label($overview, trans('product::product.overview').':') !!}
    {!! Form::textarea($overview, $product_overview, ['class' => 'form-control', 'placeholder' => trans('product::product.overview').'']) !!}
    <!-- /PRODUCT OVERVIEW -->
     
    <!-- PRODUCT DESCRIPTION -->RIPTION
    <?php $product_description = $request->get('product_titlename') ? $request->get('product_description') : @$product->product_description ?>
    {!! Form::label($description, trans('product::product.description').':') !!}
    {!! Form::textarea($description, $product_description, ['class' => 'form-control', 'placeholder' => trans('product::product.description').'']) !!}
     <!-- /PRODUCT DESCRIPTION -->
</div>
