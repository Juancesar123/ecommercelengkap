@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">Orders</h1>
</section>
<div class="content">
    <div class="clearfix"></div>
    <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">New Order</a></li>
        <li><a href="#tab_2" data-toggle="tab">On Process</a></li>
        <li><a href="#tab_3" data-toggle="tab">Shipping</a></li>
        <li><a href="#tab_4" data-toggle="tab">Finish</a></li>
        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
            <table class="table">
                <thead>
                    <th>Product</th>
                    <th>Customer Name</th>
                    <th>Quantity</th>
                    <th>Ammount</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($neworder as $item)
                        <tr>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->qty}}</td>
                            <td>@currency($item->amount)</td>
                            @if($item->status == 1)
                                <td><span class="label label-success">New Order</span></td>
                            @endif
                            <td><button class="btn btn-success"><i class="fa fa-send"></i> Process</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $neworder->links() }}
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
            <table class="table">
                <thead>
                    <th>Product</th>
                    <th>Customer Name</th>
                    <th>Quantity</th>
                    <th>Ammount</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($processorder as $item)
                        <tr>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->qty}}</td>
                            <td>@currency($item->amount)</td>
                            @if($item->status == 2)
                                <td><span class="label label-warning">On Process</span></td>
                            @endif
                            <td><button class="btn btn-success"><i class="fa fa-send"></i> Shipping Process</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $processorder->links() }}
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
            <table class="table">
                <thead>
                    <th>Product</th>
                    <th>Customer Name</th>
                    <th>Quantity</th>
                    <th>Ammount</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($shippingorder as $item)
                        <tr>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->qty}}</td>
                            <td>@currency($item->amount)</td>
                            @if($item->status == 3)
                                <td><span class="label label-warning">Shipping</span></td>
                            @endif
                            <td><button class="btn btn-success"><i class="fa fa-send"></i> Shipping Process</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $shippingorder->links() }}
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_4">
            <table class="table">
                <thead>
                    <th>Product</th>
                    <th>Customer Name</th>
                    <th>Quantity</th>
                    <th>Ammount</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach ($finishorder as $item)
                        <tr>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->qty}}</td>
                            <td>@currency($item->amount)</td>
                            @if($item->status == 4)
                                <td><span class="label label-success">Finish</span></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $finishorder->links() }}
        </div>
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
    </div>
</div>
@endsection