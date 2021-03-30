@extends('frontend.layouts.master')

@section('content')


        <!-- ======================== Main header ======================== -->

        <section class="main-header">
            <header>
                <div class="container">
                    <h1 class="h2 title text-center">Products</h1>
                    {{-- <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="index.html"><span class="icon icon-home"></span></a></li>
                        <li><a href="category.html">Product Category</a></li>
                        <li><a class="active" href="products-grid.html">Product Sub-category</a></li>
                    </ol> --}}
                </div>
            </header>
        </section>

        <!-- ======================== Products ======================== -->

        <section class="products">
            <header class="hidden">
                <h3 class="h3 title">Product category grid</h3>
            </header>

            <div class="row row-clean">            

                <div class="col-md-12 col-xs-12">

                    <div class="sort-bar clearfix">
                        <div class="sort-results pull-left">
                            
                        </div>
                        <!--Sort options-->
                        <div class="sort-options pull-right">
                            
                        </div>
                    </div>

                    {{-- <div class="row row-clean">

                        <!-- === product-item === -->
                        @forelse($front_products as $product)
                        <div class="col-xs-6 col-sm-4 col-lg-3">
                            <article>
                                <div class="info">
                                    
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#productid1" class="mfp-open">
                                            <img src="{{ asset('storage/products/' . $product->image) }}" alt="" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4">
                                            <a href="product.html">{{ $product->title }}</a>
                                        </h2>
                                        <sup>N{{ $product->price }}</sup>
                                        <span class="description clearfix">{{ $product->description }}</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @empty
                        <div class="alert alert-danger">No products on this platform</div>
                        @endforelse

                    </div> --}}<!--/row-->

                    <div class="container" style="padding-top: 20px;">
                        <div class="row row-wrap">
                            @forelse($front_products as $product)
                            <div class="col-md-4">
                                <a href="{{ route('product_detail', $product->slug) }}">
                                <div class="product-thumb">
                                    <header class="product-header">
                                        <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->title }}" title="{{ $product->title }}" height="300">
                                    </header>
                                    <div class="product-inner">
                                        {{-- <ul class="icon-group icon-list-rating" title="3.7/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul> --}}
                                        <h5 class="product-title">{{ $product->title }}</h5>
                                        <p class="product-desciption">{{ $product->description }}</p>
                                        <p class="product-desciption">by -{{ $product->user->name }}</p>
                                        <div class="product-meta">
                                            <ul class="product-price-list">
                                                <li><span class="product-price">₦{{ number_format($product->price) }}</span>
                                                </li>
                                            </ul>
                                            {{-- <ul class="product-actions-list">
                                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                                </li>
                                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                                </li>
                                            </ul> --}}
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            @empty
                            <div class="alert alert-danger">No products on this platform</div>
                            @endforelse
                        </div>
                    </div>
                    
                    <!--Pagination-->
                    {{ $front_products->links('vendor.pagination.simple-tailwind') }}
                    {{-- <div class="pagination-wrapper">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}

                </div> <!--/product items-->

            </div><!--/row-->

            <!-- ========================  Product info popup - quick view ======================== -->

            {{-- <div class="popup-main mfp-hide" id="productid1">

                <!-- === product popup === -->

                <div class="product">

                    <!-- === popup-title === -->

                    <div class="popup-title">
                        <div class="h1 title">
                            Headphones Wireless
                            <small>product category</small>
                        </div>
                    </div>

                    <!-- === product gallery === -->

                    <div class="owl-product-gallery">
                        <img src="assets/images/product-10.png" alt="" width="640" />
                        <img src="assets/images/product-10a.png" alt="" width="640" />
                    </div>

                    <!-- === product-popup-info === -->

                    <div class="popup-content">
                        <div class="product-info-wrapper">
                            <div class="row">

                                <!-- === left-column === -->

                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <strong>Maifacturer</strong>
                                        <span>Brand name</span>
                                    </div>
                                    <div class="info-box">
                                        <strong>Materials</strong>
                                        <span>Wood, Leather, Acrylic</span>
                                    </div>
                                    <div class="info-box">
                                        <strong>Availability</strong>
                                        <span><i class="fa fa-check-square-o"></i> in stock</span>
                                    </div>
                                </div>

                                <!-- === right-column === -->

                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <strong>Available Colors</strong>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-red"></span>
                                            <span class="color-btn color-btn-blue checked"></span>
                                            <span class="color-btn color-btn-green"></span>
                                            <span class="color-btn color-btn-gray"></span>
                                            <span class="color-btn color-btn-biege"></span>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <strong>Choose size</strong>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-biege">S</span>
                                            <span class="color-btn color-btn-biege checked">M</span>
                                            <span class="color-btn color-btn-biege">XL</span>
                                            <span class="color-btn color-btn-biege">XXL</span>
                                        </div>
                                    </div>
                                </div>

                            </div> <!--/row-->
                        </div> <!--/product-info-wrapper-->
                    </div> <!--/popup-content-->
                    <!-- === product-popup-footer === -->

                    <div class="popup-table">
                        <div class="popup-cell">
                            <div class="price">
                                <span class="h3">$ 1999,00 <small>$ 2999,00</small></span>
                            </div>
                        </div>
                        <div class="popup-cell">
                            <div class="popup-buttons">
                                <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                                <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                            </div>
                        </div>
                    </div>

                </div> <!--/product-->
            </div>  --}}
            <!--popup-main--> <!--/container-->

        </section>

        <!-- ================== Footer  ================== -->

        <footer>
            <!--footer showroom-->
            <div class="footer-showroom hidden">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Visit our showroom</h2>
                        <p>200 12th Ave, New York, NY 10001, USA</p>
                        <p>Mon - Sat: 10 am - 6 pm &nbsp; &nbsp; | &nbsp; &nbsp; Sun: 12pm - 2 pm</p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="#" class="btn btn-clean"><span class="icon icon-map-marker"></span> Get directions</a>
                        <div class="call-us h4"><span class="icon icon-phone-handset"></span> 333.278.06622</div>
                    </div>
                </div>
            </div>

@endsection