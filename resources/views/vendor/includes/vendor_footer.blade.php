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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
    @if(Session::has('message'))
    toastr.options =
    {
     "closeButton" : true,
     "progressBar" : true
    }
      toastr.success("{{ session('message') }}");
    @endif
      @if(Session::has('error'))
        toastr.options =
        {
         "closeButton" : true,
         "progressBar" : true
        }
          toastr.error("{{ session('error') }}");
        @endif
      @if(Session::has('info'))
        toastr.options =
        {
         "closeButton" : true,
         "progressBar" : true
        }
          toastr.info("{{ session('info') }}");
        @endif
      @if(Session::has('warning'))
        toastr.options =
        {
         "closeButton" : true,
         "progressBar" : true
        }
          toastr.warning("{{ session('warning') }}");
        @endif
  </script>
  </body>
</html>