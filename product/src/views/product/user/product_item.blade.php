
@if( ! $products->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>{{ trans('product::product.order') }}</td>
            <th style='width:10%'>Product ID</th>
            <th style='width:20%'>Product Name</th>
            <th style='width:20%'>Product Title</th>
            <th style='width:20%'>Product Cost</th>
            <th style='width:30%'>Product Overview</th>
            <th style='width:30%'>Product Description</th>
            <th style='width:20%'>{{ trans('product::product.operations') }}</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nav = $products->toArray();
        $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($products as $product)
        <tr>
            <td>
                <?php echo $counter;
                $counter++
                ?>
            </td>
            <td>{!! $product->product_id !!}</td>
            <td>{!! $product->product_name !!}</td>
            <td>{!! $product->product_title !!}</td>
            <td>{!! $product->product_cost !!}</td>
            <td>{!! $product->product_overview !!}</td>
            <td>{!! $product->product_description !!}</td>
           
            <td>
                <a href="{!! URL::route('user_product.edit', ['id' => $product->product_id]) !!}"><i class="fa fa-edit fa-2x"></i></a>
                <a href="{!! URL::route('user_product.delete',['id' =>  $product->product_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <span class="clearfix"></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<span class="text-warning">
    <h5>
        {{ trans('product::product.message_find_failed') }}
    </h5>
</span>
@endif
<div class="paginator">
    {!! $products->appends($request->except(['page']) )->render() !!}
</div>