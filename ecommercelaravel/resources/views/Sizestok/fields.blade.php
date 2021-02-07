<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('size', 'Size:') !!}
    {!! Form::text('size', null, ['class' => 'form-control']) !!}
    <input type="hidden" value="{{$productdata->id}}" name="id_product">
</div>
<div class="form-group col-sm-6">
    {!! Form::label('stok', 'Stok:') !!}
    {!! Form::text('stok', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('sizestok.data',[$productdata->id]) }}" class="btn btn-default">Cancel</a>
</div>
