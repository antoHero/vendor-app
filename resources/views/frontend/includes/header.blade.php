<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>Kasu Vendors | Online Ecommerce Community</title>

    <!--CSS bundle -->
    <link rel="stylesheet" media="all" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/linear-icons.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/ion-range-slider.css') }}" />
    <link rel="stylesheet" media="all" href="{{asset('css/theme.css')}}" />
    <link rel="stylesheet" media="all" href="{{asset('css/products.css')}}" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    {{-- <div class="page-loader"></div> --}}

    <div class="wrapper">

        <!-- ======================== Navigation ======================== -->

        <nav>

            <div class="clearfix">

                <a href="index.html" class="logo"><img src="{{asset('frontend/assets/images/logo.png')}}" alt="" /></a>

                <!-- ==========  Pre navigation ========== -->
{{-- 
                <div class="navigation navigation-pre clearfix">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#"><i class="icon icon-heart-pulse"></i> Help center</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><i class="icon icon-cart"></i> Shipping & Returns</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><i class="icon icon-cog"></i> Gift cards</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><i class="icon icon-map"></i> Store locator</a>
                        </div>
                    </div>
                </div> --}}

                <!-- ==========  Top navigation ========== -->

                <div class="navigation navigation-top clearfix">
                    <ul>
                        <li><a href="javascript:void(0);" class="open-login"><i class="icon icon-file-add"></i></a></li>
                        
                    </ul>
                </div>

                <!-- ==========  Main navigation ========== -->

                <div class="navigation navigation-main">
                    <a href="#" class="open-login"><i class="icon icon-user"></i></a>
                    <a href="#" class="open-search"><i class="icon icon-magnifier"></i></a>
                    <a href="#" class="open-cart"><i class="icon icon-cart"></i> <span>4</span></a>
                    <a href="#" class="open-menu"><i class="icon icon-menu"></i></a>
                    <div class="floating-menu">
                        <!--mobile toggle menu trigger-->
                        <div class="close-menu-wrapper">
                            <span class="close-menu"><i class="icon icon-cross"></i></span>
                        </div>
                        <ul>
                            {{-- <li>
                                <a href="#">Home <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                            </li> --}}
                            {{-- <li>
                                <a href="#">Pages <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">
                                        <div class="box-full">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li class="label">Single dropdown</li>
                                                    <li><a href="about.html">About us</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="404.html">Not found 404</a></li>
                                                    <li><a href="login.html">Login & Register</a></li>
                                                    <li><a href="email-receipt.html">Email - Receipt template</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li>
                                <a href="#">Shop <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">
                                        <div class="box-full">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li class="label">Product page</li>
                                                    <li><a href="category.html">Products categories</a></li>
                                                    <li><a href="products-grid.html">Products grid</a></li>
                                                    <li><a href="products-list.html">Products list</a></li>
                                                    <li><a href="products-grid-intro.html">Products grid intro</a></li>
                                                    <li><a href="products-topbar.html">Products topbar filter</a></li>
                                                    <li><a href="product.html">Product overview</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li>
                                <a href="#">Blog <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">
                                        <div class="box-full">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li class="label">Blog pages</li>
                                                    <li><a href="blog-grid.html">Blog grid</a></li>
                                                    <li><a href="blog-list.html">Blog list</a></li>
                                                    <li><a href="blog-grid-fullpage.html">Blog fullpage</a></li>
                                                    <li><a href="ideas.html">Blog ideas</a></li>
                                                    <li><a href="article.html">Article</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li>
                                <a href="#">Checkout <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">
                                        <div class="box-full">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li class="label">Checkout</li>
                                                    <li><a href="checkout-1.html">Checkout - Cart items</a></li>
                                                    <li><a href="checkout-2.html">Checkout - Delivery</a></li>
                                                    <li><a href="checkout-3.html">Checkout - Payment</a></li>
                                                    <li><a href="checkout-4.html">Checkout - Receipt</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                        

                            
                            <li><a href="/">Home</a></li>
                            <li><a href="javascript:void(0);" class="open-login">Suggestion Box</a></li>
                            @if(Route::has('login'))
                            @auth
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a onclick="event.preventDefault();
                          this.closest('form').submit();">Logout</a>
                                </form>
                                
                            </li>
                            @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            @endauth
                            @endif
                        </ul>
                    </div>
                </div>

                <!-- ==========  Search wrapper ========== -->

                <div class="search-wrapper">
                    <input class="form-control" placeholder="Search..." />
                    <button class="btn btn-main">Go!</button>
                </div>

                <!-- ==========  Login wrapper ========== -->

                <div class="login-wrapper">
                    <div class="h5 text-primary">Add Suggestion/Report A Shop</div>
                    <form action="{{ route('suggest') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            
                            <textarea class="form-control" name="suggestion" rows="6">Add suggestion</textarea>
                        </div>
                        <button type="submit" class="btn btn-block btn-main">Submit</button>
                    </form>
                </div>

                <!-- ==========  Cart wrapper ========== -->
            </div>
        </nav>

