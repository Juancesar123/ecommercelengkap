@extends('layouts.home')
@section('section-header')
<section class="slider__area slider__area-3 p-relative">
    <div class="slider-active">
        <div class="single-slider single-slider-2 slider__height-5 d-flex align-items-center" data-background="assets/img/slider/slider-1.jpg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="slider__content slider__content-3 pl-250">
                            <h2 data-animation="fadeInUp" data-delay=".2s">Handmade <br> Hand carved Coffee</h2>
                            <p data-animation="fadeInUp" data-delay=".4s">As rich and unique as the coffee beans it is intended for, this little scoop will make your morning ritual a special occasion every day. </p>
                            <a href="shop.html" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">Discover now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider single-slider-2 slider__height-5 d-flex align-items-center" data-background="assets/img/slider/slider-2.jpg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="slider__content slider__content-3 pl-250">
                            <h2 data-animation="fadeInUp" data-delay=".2s">Think Different &<br> Do it otherwise</h2>
                            <p data-animation="fadeInUp" data-delay=".4s">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                            <a href="shop.html" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">Discover now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider single-slider-2 slider__height-5 d-flex align-items-center" data-background="assets/img/slider/slider-3.jpg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="slider__content slider__content-3 pl-250">
                            <h2 data-animation="fadeInUp" data-delay=".2s">High Beam<br> by Tom Chung</h2>
                            <p data-animation="fadeInUp" data-delay=".4s">High Beam is an adjustable desk or shelf light that offers a wide variety of lighting possibilities.</p>
                            <a href="shop.html" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">Discover now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('content')
<div class="box-25">
    <!-- product area start -->
    <section class="product__area pt-60 pb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__title-wrapper text-center mb-55">
                        <div class="section__title mb-10">
                            <h2>Trending Products</h2>
                        </div>
                        <div class="section__sub-title">
                            <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product__slider-4 owl-carousel">
                        @foreach ($products as $item)
                        <div class="product__item">
                            <div class="product__wrapper mb-60">
                                <div class="product__thumb">
                                    <a href="product-details/{{$item->id}}" class="w-img">
                                        <img src="{{asset('storage/'.$item->poto)}}" alt="product-img">
                                        <img class="product__thumb-2" src="{{asset('storage/'.$item->poto)}}" alt="product-img">
                                    </a>
                                    <div class="product__action transition-3">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                            <i class="fal fa-sliders-h"></i>
                                        </a>
                                        <!-- Button trigger modal -->
                                        <a href="#" data-toggle="modal" data-target="#productModalId">
                                            <i class="fal fa-search"></i>
                                        </a>

                                    </div>
                                    <div class="product__sale">
                                        <span class="new">new</span>
                                    </div>
                                </div>
                                <div class="product__content p-relative">
                                    <div class="product__content-inner">
                                        <h4><a href="product-details/{{$item->id}}">{{$item->product_name}}</a></h4>
                                        <div class="product__price transition-3">
                                            <span>@currency($item->price)</span>
                                            {{-- <span class="old-price">$96.00</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product__load-btn text-center mt-25">
                        <a href="#" class="os-btn os-btn-3">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- banner area start -->
    <div class="banner__area-2 pb-60">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-6 col-lg-6">
                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                        <div class="banner__thumb fix">
                            <a href="product-details.html" class="w-img"><img src="assets/img/shop/banner/banner-big-1.jpg" alt="banner"></a>
                        </div>
                        <div class="banner__content-2 p-absolute transition-3">
                            <span>Products Essentials</span>
                            <h4><a href="product-details.html">Bottle With Wooden Cork</a></h4>
                            <p>Mirum est notare quam littera gothica, quam nunc putamus <br> parum claram, anteposuerit litterarum formas.</p>
                            <a href="product-details.html" class="os-btn os-btn-2">buy now / <span>$59.25</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class=" banner__item-2 banner-left p-relative mb-30 pl-15">
                        <div class="banner__thumb fix">
                            <a href="product-details.html" class="w-img"><img src="assets/img/shop/banner/banner-big-2.jpg" alt="banner"></a>
                        </div>
                        <div class="banner__content-2 banner__content-2-right p-absolute transition-3">
                            <span>Products Furniture</span>
                            <h4><a href="product-details.html">Hauteville Plywood Chair</a></h4>
                            <p>Mirum est notare quam littera gothica, quam nunc putamus <br> parum claram, anteposuerit litterarum formas.</p>
                            <a href="product-details.html" class="os-btn os-btn-2">buy now / <span>$396.99</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <!-- subscribe area start -->
    <section class="subscribe__area pb-100">
        <div class="container">
            <div class="subscribe__inner pt-95">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                        <div class="subscribe__content text-center">
                            <h2>Get Discount Info</h2>
                            <p>Subscribe to the Outstock mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                            <div class="subscribe__form">
                                <form action="#">
                                    <input type="email" placeholder="Subscribe to our newsletter...">
                                    <button class="os-btn os-btn-2 os-btn-3">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe area end -->

</div>

@endsection