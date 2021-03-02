<div
          class="position-relative d-flex flex-column flex-fill page-content"
          style="min-width:0"
        >
          <div class="app-header">
            <nav class="bg-white navbar">
              <ul class="navbar-nav d-lg-none d-sm-flex d-md-flex">
                <a class="nav-toggle mobile-toggle">
                  <span class="animated-icon">
                    <div
                      style="width:24px;height:24px"
                      data-animation-path="{{asset('dash/vendor/animated-icons/menu-back/menu-back.json')}}"
                    ></div>
                  </span>
                </a>
                <a href="/" class="navbar-brand">
                  <svg width="24" height="24">
                    <use xlink:href="#logo-icon"></use>
                  </svg>
                </a>
              </ul>
              {{-- <ul class="navbar-nav d-none d-lg-flex d-xl-flex">
                <li class="nav-item">
                  <a href="/calendar" class="nav-link">Calendar</a>
                </li>
                <li class="nav-item">
                  <a href="/messages" class="nav-link">Messages</a>
                </li>
              </ul> --}}
             {{--  <div class="search input-group d-none d-sm-flex">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <span class="animated-icon">
                      <div
                        style="width:20px;height:20px"
                        data-animation-path="vendor/animated-icons/search-cancel/search-cancel.json"
                      ></div>
                    </span>
                  </span>
                </div>
                <input
                  type="text"
                  placeholder="Search dashboard"
                  class="form-control"
                />
              </div> --}}
              <ul class="ml-auto menu-right navbar-nav">
                <li class="dropdown nav-item">
                  <a
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    href="#"
                    class="nav-link"
                    aria-expanded="false"
                  >
                    <span
                      class="position-relative d-flex rounded-circle"
                      style="width:32px;height:32px"
                    >
                      <img
                        src="{{asset('dash/images/avatar.jpg')}}"
                        alt="avatar"
                        width="32px"
                        height="32px"
                        class="rounded-circle"
                      />
                    </span>
                  </a>
                  <div
                    tabindex="-1"
                    role="menu"
                    aria-hidden="true"
                    class="dropdown-menu dropdown-menu-right"
                  >
                    <button
                      type="button"
                      tabindex="0"
                      role="menuitem"
                      class="dropdown-item"
                    >
                      Logout
                    </button>
                  </div>
                </li>
              </ul>
            </nav>
          </div>