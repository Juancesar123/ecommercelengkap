<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control']) !!}
    <input type="hidden" value="{{$productdata->id}}" name="id_product">
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('color.data',[$productdata->id]) }}" class="btn btn-default">Cancel</a>
</div>
