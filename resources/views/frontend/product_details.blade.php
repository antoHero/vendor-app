@extends('frontend.layouts.master')

@section('content')
<div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                        <h3>Add a Review</h3>
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" placeholder="e.g. John Doe" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" placeholder="e.g. jogndoe@gmail.com" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Review</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Rating</label>
                                <ul class="icon-list icon-list-inline star-rating" id="star-rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                    <div class="row" style="padding: 30px 0 50px 0;">
                        <div class="col-md-5">
                            <div class="fotorama--hidden">
                            	
                            </div>
                            <div class="fotorama fotorama1611164692118" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="150" data-thumbwidth="150">
                            	<div class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--toggle-arrows fotorama__wrap--no-controls" style="width: 800px; min-width: 0px; max-width: 100%;">
                            		<div class="fotorama__stage" style="width: 539px; height: 404px;">
                            			<div class="fotorama__stage__shaft fotorama__grab" style="transition-duration: 0ms; transform: translate3d(0.001px, 0px, 0px); width: 539px; margin-left: 0px;">
                            				<div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img fotorama__active" style="left: 0px;">
                            					<img src="{{ asset('storage/products/' . $product->image) }}" class="fotorama__img" style="width: 539px; height: 404px; margin-left: -270px; margin-top: -202px;">
                            				</div>
                            				<div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img" style="left: 541px;">
                            					<img src="{{ asset('storage/products/' . $product->image) }}" class="fotorama__img" style="width: 539px; height: 404px; margin-left: -270px; margin-top: -202px;">
                            				</div>
                            			</div>
                            			<div class="fotorama__video-close"></div><div class="fotorama__fullscreen-icon"></div>
                            		</div>
                            		<div class="fotorama__nav-wrap">
                            			<div class="fotorama__nav fotorama__nav--thumbs fotorama__shadows--right" style="width: 539px;">
                            				<div class="fotorama__nav__shaft fotorama__grab" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);"><div class="fotorama__nav__frame fotorama__nav__frame--thumb" style="width: 150px;"><div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img src="img/food_is_pride_800x600.jpg" class="fotorama__img" style="width: 200px; height: 150px; margin-left: -100px; margin-top: -75px;"></div></div></div></div></div></div></div>
                        </div>
                        <div class="col-md-7">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-info box">
                                
                                        <h3>{{ $product->title }}</h3>
                                        <p class="product-info-price">N{{ $product->price }}</p>
                                        <p class="text-smaller text-muted">{{ $product->description }}</p>
                                        <ul class="icon-list list-space product-info-list" style="list-style: none;">
                                            <li><i class=""></i>by - {{ $product->user->name }}</li>
                                        </ul>
                                        <ul class="list-inline">
                                            <li>
                                                <a href="tel: +234{{$product->user->phone}}" class="btn btn-primary"><i class="fa fa-phone"></i> Contact Seller</a>
                                                {{-- <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addReview"></i>Add Review</a> --}}
                                            </li>
                                        </ul>
                                        
                                        <!-- Modal -->
                                        
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Review this product</h3>
                                    <form action="{{ route('review') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="shop_id" value="{{ $product->user->id }}">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" placeholder="e.g. Jay" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="email" placeholder="e.g. kasu@gmail.com" class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label>Rating</label>
                                            <br><small>Rate product out of 5</small>
                                            <select class="form-control" name="rating">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            {{-- <input type="email" placeholder="e.g. kasu@gmail.com" class="form-control" name="email"> --}}
                                        </div>
                                        <div class="form-group">
                                            <label>Review</label>
                                            <textarea class="form-control" name="review"></textarea>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Rating</label>
                                            <ul class="icon-list icon-list-inline star-rating" id="star-rating">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                                </div>    
                            </div>
                            
                        </div>
                    </div>
                    {{-- <div class="gap" style="padding-top: 50px;"></div>
                    <div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Desciption</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-1">
                                <p>Nullam viverra odio dui ornare suspendisse nam est conubia quisque phasellus in tristique penatibus neque faucibus fringilla aliquam himenaeos elit enim sociosqu nunc ullamcorper a montes ligula molestie lacus conubia leo senectus tempus ante porta vulputate dis euismod sagittis risus pretium facilisis sociis in facilisis arcu interdum montes et aliquet</p>
                                <p>Nostra litora magna dolor amet taciti eu adipiscing sapien vestibulum mattis litora ligula magna massa vulputate conubia parturient consequat netus inceptos dapibus platea potenti habitasse eros at fringilla nisl parturient</p>
                                <p>Netus ultrices eleifend mus commodo leo sociosqu platea vehicula himenaeos mattis etiam vestibulum pharetra sodales aliquam mattis semper ut dictum justo rhoncus iaculis laoreet aliquet a erat accumsan dui luctus</p>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="gap"></div>
                    <h3>Related Porducts</h3>
                    <div class="gap gap-mini"></div>
                    <div class="row row-wrap">
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="img/a_turn_800x600.jpg" alt="Image Alternative text" title="a turn">
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="3.8/5 rating">
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
                                    </ul>
                                    <h5 class="product-title">Diving with Sharks</h5>
                                    <p class="product-desciption">Tempus mauris primis magna nulla mus urna cursus</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$178</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="img/ana_29_800x600.jpg" alt="Image Alternative text" title="Ana 29">
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="4/5 rating">
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
                                    </ul>
                                    <h5 class="product-title">Hot Summer Collection</h5>
                                    <p class="product-desciption">Tempus mauris primis magna nulla mus urna cursus</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$300</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride">
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Best Pasta</h5>
                                    <p class="product-desciption">Tempus mauris primis magna nulla mus urna cursus</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$191</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gap gap-small"></div> --}}
                </div>
            </div>

        </div>


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