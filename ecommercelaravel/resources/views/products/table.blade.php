<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Product Name</th>
        <th>Stok</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Description</th>
        <th>Poto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->product_name }}</td>
            <td>{{ $product->stok }}</td>
            <td>{{ $product->category_name }}</td>
            <td>{{ $product->name }}</td>
            <td>@currency($product->price)</td>
            <td>{{ $product->description }}</td>
            <td><img src="{{asset('storage/'.$product->poto)}}" style="width:100px;height:100px;"></td>
                <td>
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('products.edit', [$product->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{{ route('sizestok.data', [$product->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-plus"></i> add stok</a>
                        <a href="{{ route('color.data', [$product->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-plus"></i> add color</a>
                        <a href="{{ route('imageproduct.data', [$product->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-plus"></i> add image</a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
</div>
