<!doctype html>
<html class="no-js" lang="zxx">
    @include('partials.head')
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->  

        <!-- prealoder area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                <div class="object" id="first_object"></div>
                <div class="object" id="second_object"></div>
                <div class="object" id="third_object"></div>
                </div>
            </div>      
        </div>
        <!-- prealoder area end -->

        <!-- header area start -->
        @include('partials.header')
        <!-- header area end -->
        
        <!-- scroll up area start -->
        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- scroll up area end -->

        <!-- search area start -->
        <section class="header__search white-bg transition-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header__search-inner text-center">
                            <form action="#">
                                <div class="header__search-btn">
                                    <a href="javascript:void(0);" class="header__search-btn-close"><i class="fal fa-times"></i></a>
                                </div>
                                <div class="header__search-header">
                                    <h3>Search</h3>
                                </div>
                                <div class="header__search-categories">
                                    <ul class="search-category">
                                        <li><a href="shop.html">All Categories</a></li>
                                        <li><a href="shop.html">Accessories</a></li>
                                        <li><a href="shop.html">Chair</a></li>
                                        <li><a href="shop.html">Tablet</a></li>
                                        <li><a href="shop.html">Men</a></li>
                                        <li><a href="shop.html">Women</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="header__search-input p-relative">
                                    <input type="text" placeholder="Search for products... ">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </div>
                            </form>
                
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="body-overlay transition-3"></div>
        <!-- search area end -->

        <!-- extra info area start -->
        <section class="extra__info transition-3">
            <div class="extra__info-inner">
                <div class="extra__info-close text-right">
                    <a href="javascript:void(0);" class="extra__info-close-btn"><i class="fal fa-times"></i></a>
                </div>
                <!-- side-mobile-menu start -->
                <nav class="side-mobile-menu d-block d-lg-none">
                    <ul id="mobile-menu-active">
                        <li class="active has-dropdown"><a href="index.html">Home</a>
                            <ul class="submenu transition-3">
                                <li><a href="index.html">Home Style 1</a></li>
                                <li><a href="index-2.html">Home Style 2</a></li>
                                <li><a href="index-3.html">Home Style 3</a></li>
                                <li><a href="index-4.html">Home Style 4</a></li>
                                <li><a href="index-5.html">Home Style 5</a></li>
                                <li><a href="index-6.html">Home Style 6</a></li>
                            </ul>
                        </li>
                        <li class="mega-menu has-dropdown"><a href="shop.html">Shop</a>
                            <ul class="submenu transition-3" data-background="assets/img/bg/mega-menu-bg.jpg">
                                <li class="has-dropdown">
                                    <a href="shop.html">Shop Pages</a>
                                    <ul>
                                        <li><a href="shop.html">Standard Shop Page</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        <li><a href="shop-4-col.html">Shop 4 Column</a></li>
                                        <li><a href="shop-3-col.html">Shop 3 Column</a></li>
                                        <li><a href="shop.html">Shop Page</a></li>
                                        <li><a href="shop.html">Shop Page </a></li>
                                        <li><a href="shop.html">Shop Infinity</a></li>
                                    </ul>
                                </li>
                                <li  class="has-dropdown">
                                    <a href="shop.html">Products Pages</a>
                                    <ul>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="product-details.html">Product Page V2</a></li>
                                        <li><a href="product-details.html">Product Page V3</a></li>
                                        <li><a href="product-details.html">Product Page V4</a></li>
                                        <li><a href="product-details.html">Simple Product</a></li>
                                        <li><a href="product-details.html">Variable Product</a></li>
                                        <li><a href="product-details.html">External Product</a></li>
                                    </ul>
                                </li>
                                <li  class="has-dropdown">
                                    <a href="shop.html">Other Shop Pages</a>
                                    <ul>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="blog.html">Blog</a>
                            <ul class="submenu transition-3">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                <li><a href="blog-2-col.html">Blog 2 Column</a></li>
                                <li><a href="blog-2-col-mas.html">BLog 2 Col Masonary</a></li>
                                <li><a href="blog-3-col.html">Blog 3 Column</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="shop.html">Pages</a>
                            <ul class="submenu transition-3">
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="error.html">Error 404</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- side-mobile-menu end -->
            </div>
        </section>
        <div class="body-overlay transition-3"></div>
        <!-- extra info area end -->

        <main>

                <!-- slider area start -->
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
                <!-- slider area end -->
                
                <!-- box -->
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
                                        <div class="product__item">
                                            <div class="product__wrapper mb-60">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-1.jpg" alt="product-img">
                                                        <img class="product__thumb-2" src="assets/img/shop/product/product-10.jpg" alt="product-img">
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
                                                </div>
                                                <div class="product__content p-relative">
                                                    <div class="product__content-inner">
                                                        <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                        <div class="product__price transition-3">
                                                            <span>$96.00</span>
                                                            <span class="old-price">$96.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-cart p-absolute transition-3">
                                                        <a href="#">+ Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__wrapper mb-60">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-5.jpg" alt="product-img">
                                                        <img class="product__thumb-2" src="assets/img/shop/product/product-11.jpg" alt="product-img">
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
                                                        <span class="percent">-16%</span>
                                                    </div>
                                                </div>
                                                <div class="product__content p-relative">
                                                    <div class="product__content-inner">
                                                        <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                        <div class="product__price transition-3">
                                                            <span>$96.00</span>
                                                            <span class="old-price">$96.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-cart p-absolute transition-3">
                                                        <a href="#">+ Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item">
                                            <div class="product__wrapper mb-60">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-2.jpg" alt="product-img">
                                                        <img class="product__thumb-2" src="assets/img/shop/product/product-9.jpg" alt="product-img">
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
                                                        <span class="percent">-16%</span>
                                                    </div>
                                                </div>
                                                <div class="product__content p-relative">
                                                    <div class="product__content-inner">
                                                        <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                        <div class="product__price transition-3">
                                                            <span>$96.00</span>
                                                            <span class="old-price">$96.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-cart p-absolute transition-3">
                                                        <a href="#">+ Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__wrapper mb-60">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-6.jpg" alt="product-img">
                                                        <img class="product__thumb-2" src="assets/img/shop/product/product-7.jpg" alt="product-img">
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
                                                </div>
                                                <div class="product__content p-relative">
                                                    <div class="product__content-inner">
                                                        <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                        <div class="product__price transition-3">
                                                            <span>$96.00</span>
                                                            <span class="old-price">$96.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-cart p-absolute transition-3">
                                                        <a href="#">+ Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item">
                                            <div class="product__wrapper mb-60">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-3.jpg" alt="product-img">
                                                        <img class="product__thumb-2" src="assets/img/shop/product/product-8.jpg" alt="product-img">
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
                                                </div>
                                                <div class="product__content p-relative">
                                                    <div class="product__content-inner">
                                                        <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                        <div class="product__price transition-3">
                                                            <span>$96.00</span>
                                                            <span class="old-price">$96.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-cart p-absolute transition-3">
                                                        <a href="#">+ Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__wrapper mb-60">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-7.jpg" alt="product-img">
                                                        <img class="product__thumb-2" src="assets/img/shop/product/product-1.jpg" alt="product-img">
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
                                                        <span class="percent">-16%</span>
                                                    </div>
                                                </div>
                                                <div class="product__content p-relative">
                                                    <div class="product__content-inner">
                                                        <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                        <div class="product__price transition-3">
                                                            <span>$96.00</span>
                                                            <span class="old-price">$96.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-cart p-absolute transition-3">
                                                        <a href="#">+ Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item">
                                            <div class="product__wrapper mb-60">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-4.jpg" alt="product-img">
                                                        <img class="product__thumb-2" src="assets/img/shop/product/product-12.jpg" alt="product-img">
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
                                                        <span class="percent">-16%</span>
                                                    </div>
                                                </div>
                                                <div class="product__content p-relative">
                                                    <div class="product__content-inner">
                                                        <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                        <div class="product__price transition-3">
                                                            <span>$96.00</span>
                                                            <span class="old-price">$96.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-cart p-absolute transition-3">
                                                        <a href="#">+ Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__wrapper mb-60">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-8.jpg" alt="product-img">
                                                        <img class="product__thumb-2" src="assets/img/shop/product/product-3.jpg" alt="product-img">
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
                                                </div>
                                                <div class="product__content p-relative">
                                                    <div class="product__content-inner">
                                                        <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                        <div class="product__price transition-3">
                                                            <span>$96.00</span>
                                                            <span class="old-price">$96.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-cart p-absolute transition-3">
                                                        <a href="#">+ Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item">
                                            <div class="product__wrapper mb-60">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-5.jpg" alt="product-img">
                                                        <img class="product__thumb-2" src="assets/img/shop/product/product-11.jpg" alt="product-img">
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
                                                        <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                        <div class="product__price transition-3">
                                                            <span>$96.00</span>
                                                            <span class="old-price">$96.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-cart p-absolute transition-3">
                                                        <a href="#">+ Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__wrapper mb-60">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-4.jpg" alt="product-img">
                                                        <img class="product__thumb-2" src="assets/img/shop/product/product-1.jpg" alt="product-img">
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
                                                        <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                        <div class="product__price transition-3">
                                                            <span>$96.00</span>
                                                            <span class="old-price">$96.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-cart p-absolute transition-3">
                                                        <a href="#">+ Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

            
            <!-- shop modal start -->
            <!-- Modal -->
            <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered product-modal" role="document">
                    <div class="modal-content">
                        <div class="product__modal-wrapper p-relative">
                            <div class="product__modal-close p-absolute">
                                <button   data-dismiss="modal"><i class="fal fa-times"></i></button>
                            </div>
                            <div class="product__modal-inner">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                        <div class="product__modal-box">
                                            <div class="tab-content mb-20" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-big-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-big-2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-big-3.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <nav>
                                                <div class="nav nav-tabs justify-content-between" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                                    <div class="product__nav-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-sm-1.jpg" alt="">
                                                    </div>
                                                    </a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                    <div class="product__nav-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-sm-2.jpg" alt="">
                                                    </div>
                                                    </a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                                                    <div class="product__nav-img w-img">
                                                        <img src="assets/img/shop/product/quick-view/quick-sm-3.jpg" alt="">
                                                    </div>
                                                    </a>
                                                </div>
                                                </nav>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                                        <div class="product__modal-content">
                                            <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                            <div class="rating rating-shop mb-15">
                                                <ul>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fal fa-star"></i></span></li>
                                                </ul>
                                                <span class="rating-no ml-10">
                                                    3 rating(s)
                                                </span>
                                            </div>
                                            <div class="product__price-2 mb-25">
                                                <span>$96.00</span>
                                                <span class="old-price">$96.00</span>
                                            </div>
                                            <div class="product__modal-des mb-30">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                            </div>
                                            <div class="product__modal-form">
                                                <form action="#">
                                                    <div class="product__modal-input size mb-20">
                                                        <label>Size <i class="fas fa-star-of-life"></i></label>
                                                        <select>
                                                            <option>- Please select -</option>
                                                            <option> S</option>
                                                            <option> M</option>
                                                            <option> L</option>
                                                            <option> XL</option>
                                                            <option> XXL</option>
                                                        </select>
                                                    </div>
                                                    <div class="product__modal-input color mb-20">
                                                        <label>Color <i class="fas fa-star-of-life"></i></label>
                                                        <select>
                                                            <option>- Please select -</option>
                                                            <option> Black</option>
                                                            <option> Yellow</option>
                                                            <option> Blue</option>
                                                            <option> White</option>
                                                            <option> Ocean Blue</option>
                                                        </select>
                                                    </div>
                                                    <div class="product__modal-required mb-5">
                                                        <span >Repuired Fiields *</span>
                                                    </div>
                                                    <div class="pro-quan-area d-lg-flex align-items-center">
                                                        <div class="product-quantity-title">
                                                            <label>Quantity</label>
                                                        </div>
                                                        <div class="product-quantity">
                                                            <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                                        </div>
                                                        <div class="pro-cart-btn ml-20">
                                                            <a href="#" class="os-btn os-btn-black os-btn-3 mr-10">+ Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop modal end -->
        </main>

        <!-- footer area start -->
        <section class="footer__area footer-bg">
            <div class="footer__top pt-100 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="footer__widget mb-30">
                                <div class="footer__widget-title mb-25">
                                    <a href="index.html"><img src="assets/img/logo/logo-2.png" alt="logo"></a>
                                </div>
                                <div class="footer__widget-content">
                                    <p>Outstock is a premium Templates theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready.</p>
                                    <div class="footer__contact">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <i class="fal fa-map-marker-alt"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Add: 1234 Heaven Stress, Beverly Hill, Melbourne, USA.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fal fa-envelope-open-text"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Email: Contact@basictheme.com</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fal fa-phone-alt"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Phone Number: (800) 123 456 789</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="footer__widget mb-30">
                                <div class="footer__widget-title">
                                    <h5>information</h5>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__links">
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">Delivery Inforamtion</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Condition</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="footer__widget mb-30">
                                <div class="footer__widget-title mb-25">
                                    <h5>Customer Service</h5>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__links">
                                        <ul>
                                            <li><a href="#">Shipping Policy</a></li>
                                            <li><a href="#">Help & Contact Us</a></li>
                                            <li><a href="#">Returns & Refunds</a></li>
                                            <li><a href="#">Online Stores</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="footer__copyright">
                                <p>Copyright © <a href="index.html">Outstock</a> all rights reserved. Powered by <a href="index.html">basictheme</a></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="footer__social f-right">
                                <ul>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer area end -->

		<!-- JS here -->
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
        <script src="assets/js/vendor/waypoints.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery-ui-slider-range.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
