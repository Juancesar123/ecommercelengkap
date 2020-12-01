<!-- Nama Product Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $datausers->email }}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $datausers->name }}</p>
</div>
<div class="form-group">
    {!! Form::label('level', 'Level:') !!}
    <p>{{ $datausers->level }}</p>
</div>
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    @if($datausers->status == 1)
        <p>aktif</p>
    @elseif($datausers->status == 2)
        <p>Block</p>
    @endif
</div>
