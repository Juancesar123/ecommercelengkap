@extends('layouts.home')
@section('section-header')
<section class="page__title p-relative d-flex align-items-center" data-background="assets/img/page-title/page-title-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__title-inner text-center">
                    <h1>Your Cart</h1>
                    <div class="page__title-breadcrumb">                                 
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Cart</li>
                        </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->
@endsection
@section('content')

    <!-- page title area end -->

    <!-- Cart Area Strat-->
    <section class="cart-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $item)
                                        <tr>
                                            <td class="product-thumbnail"><a href="product-details/{{$item->id}}"><img src="{{asset('storage/'.$item->poto)}}" alt=""></a></td>
                                            <td class="product-name"><a href="product-details/{{$item->id}}">{{$item->product_name}}</a></td>
                                            <td class="product-price"><span class="amount">{{$item->price}}</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus"><input type="text" value="{{$item->qty}}" /></div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">{{$item->total_harga}}</span></td>
                                            <td class="product-remove"><a href="delete-cart/{{$item->id}}"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul class="mb-20">
                                        <li>Subtotal <span>@currency($cart->sum('total_harga'))</span></li>
                                        <li>Total <span>@currency($cart->sum('total_harga'))</span></li>
                                    </ul>
                                    <a class="os-btn" href="/checkout">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection