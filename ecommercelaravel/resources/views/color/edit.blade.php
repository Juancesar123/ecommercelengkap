@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit Color
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($data, ['route' => ['color.update', $data->id], 'method' => 'patch']) !!}

                        @include('color.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection