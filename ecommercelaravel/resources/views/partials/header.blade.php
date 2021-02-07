<header>
    <div id="header-sticky" class="header__area header__transparent box-25">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul>
                                <li class="active">
                                    <a href="/">Home</a>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-4 col-sm-4">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-8 col-sm-8">
                    <div class="header__right p-relative d-flex justify-content-between justify-content-sm-end align-items-center">
                        
                        <div class="mobile-menu-btn d-lg-none">
                            <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i></a>
                        </div>
                        <div class="header__action">
                                <ul>
                                    <li><a href="#" class="search-toggle"><i class="ion-ios-search-strong"></i> Search</a></li>
                                    <li><a href="javascript:void(0);" class="cart"><i class="ion-bag"></i> Cart <span>({{$cart->count()}})</span></a>
                                        <ul class="mini-cart">
                                            @foreach ($cart as $item)
                                            <li>
                                                <div class="cart-img f-left">
                                                    <a href="product-details/{{$item->id_product}}">
                                                        <img src="{{asset('storage/'.$item->poto)}}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content f-left text-left">
                                                    <h5>
                                                        <a href="product-details/{{$item->id_product}}">{{$item->product_name}}</a>
                                                    </h5>
                                                    <div class="cart-price">
                                                        <span class="ammount">{{$item->qty}}<i class="fal fa-times"></i></span>
                                                        <span class="price">@currency($item->price)</span>
                                                        <input type="hidden" value="{{$item->price}}" name="price">
                                                    </div>
                                                </div>
                                                <div class="del-icon f-right mt-30">
                                                    <a href="delete-cart/{{$item->id}}">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                </div>
                                            </li>    
                                            @endforeach
                                            
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Subtotal:</span>
                                                    <span class="f-right">@currency($purchases)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="/cart" class="os-btn">view Cart</a>
                                                    <a class="os-btn os-btn-black" href="checkout">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="javascript:void(0);"><i class="far fa-bars"></i></a>
                                        <ul class="extra-info">
                                            <li>
                                                <div class="my-account">
                                                    <div class="extra-title">
                                                        <h5>My Account</h5>
                                                    </div>
                                                    <ul>
                                                        <li><a href="login.html">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="/cart">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="register.html">Create Account</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="lang">
                                                    <div class="extra-title">
                                                        <h5>Language</h5>
                                                    </div>
                                                    <ul>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">France</a></li>
                                                        <li><a href="#">Germany</a></li>
                                                        <li><a href="#">Bangla</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="currency">
                                                    <div class="extra-title">
                                                        <h5>currency</h5>
                                                    </div>
                                                    <ul>
                                                        <li><a href="#">USD - US Dollar</a></li>
                                                        <li><a href="#">EUR - Ruro</a></li>
                                                        <li><a href="#">GBP - Britis Pound</a></li>
                                                        <li><a href="#">INR - Indian Rupee</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>