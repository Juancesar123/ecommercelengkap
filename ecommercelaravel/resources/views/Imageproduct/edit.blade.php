@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ubah Gambar Product
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($data, ['route' => ['imageproduct.update', $data->id], 'method' => 'patch','files' => true]) !!}

                        @include('Imageproduct.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection