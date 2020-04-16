<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $product->product_name }}</p>
</div>

<!-- Stok Field -->
<div class="form-group">
    {!! Form::label('stok', 'Stok:') !!}
    <p>{{ $product->stok }}</p>
</div>

<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $product->category_name }}</p>
</div>

<!-- Brand Field -->
<div class="form-group">
    {!! Form::label('brand', 'Brand:') !!}
    <p>{{ $product->name }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $product->description }}</p>
</div>

<!-- Poto Field -->
<div class="form-group">
    {!! Form::label('poto', 'Poto:') !!}
    <img src="{{ asset('storage/'.$product->poto) }}" style="width:100px;height:100px;">
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $product->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $product->updated_at }}</p>
</div>

