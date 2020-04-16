<!-- Nama Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_product', 'Nama Product:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control','id'=>'product_name']) !!}
    {!! Form::hidden('product_id', null, ['id' => 'product_id']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::text('quantity', null, ['class' => 'form-control','id'=>'quantity']) !!}
</div>

<!-- Ammount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ammount', 'Ammount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control','id'=>'ammount']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control','id'=>'price']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transaksiPembelians.index') }}" class="btn btn-default">Cancel</a>
</div>
