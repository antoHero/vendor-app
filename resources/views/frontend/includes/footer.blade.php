<!--footer links-->
           {{--  <div class="footer-links">
                <div class="row">
                    <div class="col-sm-4 col-md-2">
                        <h5>Browse by</h5>
                        <ul>
                            <li><a href="#">Brand</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Sales</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="#">In-Store Pickup</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Afterpay</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Store Locator</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <h5>Order info</h5>
                        <ul>
                            <li><a href="#">Order Status </a></li>
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Exchanges</a></li>
                            <li><a href="#">Order history</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <h5>Customer service</h5>
                        <ul>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Product Recalls</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="#">Store Pickup</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h5>Sign up for our newsletter</h5>
                        <p><i>Add your email address to sign up for our monthly emails and to receive promotional offers.</i></p>
                        <div class="form-group form-newsletter">
                            <input class="form-control" type="text" name="email" value="" placeholder="Email address" />
                            <input type="submit" class="btn btn-main btn-sm" value="Subscribe" />
                        </div>
                    </div>
                </div>
            </div> --}}

            <!--footer social-->

            {{-- <div class="footer-social">
                <div class="row">
                    <div class="col-sm-6"> <a href="#">Sitemap</a> &nbsp; | &nbsp; <a href="#">Privacy policy</a>
                    </div>
                    <div class="col-sm-6 links">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </footer>

    </div> <!--/wrapper-->

    <!--JS files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bootstrap.js') }}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/jquery.owl.carousel.js')}}"></script>
    <script src="{{asset('js/jquery.ion.rangeSlider.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
          @endif
    </script>
</body>
</html>