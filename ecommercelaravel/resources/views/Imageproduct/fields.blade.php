<!-- Name Field -->
<div class="container">
<div class="row">
@if($data)
<div class="col-sm-2">
    
<img src="{{asset('storage/'.$data->image)}}" style="width: 100px;height: 100px">
</div>
@endif
<div class="form-group col-sm-6">
    {!! Form::label('Gambar', 'Gambar:') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
    <input type="hidden" value="{{$productdata->id}}" name="id_product">
  
</div>
</div>
</div>
<br>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('imageproduct.data',[$productdata->id]) }}" class="btn btn-default">Cancel</a>
</div>
