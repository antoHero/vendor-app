<div class="app-footer bg-light">
            <nav class="navbar navbar-expand">
              <div class="collapse show navbar-collapse" aria-expanded="true">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link"
                      >© Copyright Kasu Trading 2020</a
                    >
                  </li>
                </ul>
              </div>
              {{-- <ul class="ml-auto menu-right navbar-nav">
                <li class="nav-item"><a class="nav-link">About</a></li>
                <li class="nav-item"><a class="nav-link">Team</a></li>
                <li class="nav-item"><a class="nav-link">Contact</a></li>
              </ul> --}}
            </nav>
          </div>
        </div>
      </div>
    </div>

    <script src="{{asset('dash/vendor/jquery-3.4.1.slim.min.js')}}"></script>
    <script src="{{asset('dash/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('dash/vendor/lottie.js')}}"></script>

    <script src="{{asset('dash/js/app.js')}}"></script>

    <script src="{{asset('dash/js/dashboard.js')}}"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}"></script>

    @if(Session::has('message'))
        <script>
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
        </script>
    @endif
  </body>
</html>