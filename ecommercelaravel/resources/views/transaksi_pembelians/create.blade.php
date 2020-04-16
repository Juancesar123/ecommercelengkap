@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
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
                    {!! Form::open(['route' => 'transaksiPembelians.store']) !!}

                        @include('transaksi_pembelians.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        var productNames = [];
        $.ajax({
            method:'GET',
            url:'/get_product',
            success:function(data){
                data.forEach(element => {
                    productNames.push({id:element.id,value:element.product_name})
                });
            }
        })
        var projects = [{ id: "12",value: "Don Davis" }, { id: "17", value:"Stan Smith" }]
        $( "#product_name" ).autocomplete({
            minLength: 0,
            source: productNames,
            focus: function( event, ui ){
              $( "#product_name" ).val( ui.item.value);
              return false;
            },
            select: function( event, ui ) {
                $( "#product_name" ).val( ui.item.value);
                $( "#product_id" ).val( ui.item.id);
                return false;
            },
        });
        $('#price').blur(function(){
            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var ammount = quantity * price ;
            console.log(price)  
            $('#ammount').val(ammount);
        })
      });
</script>
@endpush