@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Transaksi Pembelian
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($transaksiPembelian, ['route' => ['transaksiPembelians.update', $transaksiPembelian->id], 'method' => 'patch']) !!}

                        @include('transaksi_pembelians.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection