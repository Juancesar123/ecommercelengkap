<!-- Nama Product Field -->
<div class="form-group">
    {!! Form::label('nama_product', 'Nama Product:') !!}
    <p>{{ $transaksiPembelian->product_name }}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $transaksiPembelian->quantity }}</p>
</div>

<!-- Ammount Field -->
<div class="form-group">
    {!! Form::label('ammount', 'Ammount:') !!}
    <p>{{ $transaksiPembelian->amount }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $transaksiPembelian->price }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $transaksiPembelian->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $transaksiPembelian->updated_at }}</p>
</div>

