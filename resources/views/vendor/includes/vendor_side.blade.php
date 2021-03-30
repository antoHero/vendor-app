<!DOCTYPE html>
<html lang="en-gb">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="author" content="" />


    <title>Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:900|Anonymous+Pro:400,700|Arimo:400,700"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('dash/css/app.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <script src="{{ asset('toastr/toastr.min.css') }}"></script>

    
    <script src="{{ asset('dash/vendor/Chart.min.js') }}"></script>
  </head>
  <body>
    <svg width="24" height="24" viewBox="0 0 24 24" style="display:none">
      <g
        id="logo-icon"
        stroke="currentColor"
        stroke-width="1"
        stroke-linecap="round"
        stroke-linejoin="round"
        fill="none"
        fill-rule="evenodd"
      >
        <path
          d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"
        ></path>
      </g>
    </svg>

    <div class="page page-sticky-sidebar">
      <div class="app-header" style="display: none; visibility: hidden;">
        <nav class="bg-white navbar">
          <ul class="navbar-nav">
            <a href="/" class="navbar-brand">
              <svg width="24" height="24">
                <use xlink:href="#logo-icon"></use>
              </svg>
              <span class="ml-2">Kasu</span>
            </a>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/calendar" class="nav-link">Calendar</a>
            </li>
            <li class="nav-item">
              <a href="/messages" class="nav-link">Messages</a>
            </li>
          </ul>
          <div class="search input-group d-none d-sm-flex">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <span class="animated-icon">
                  <div
                    style="width:20px;height:20px"
                    data-animation-path="{{asset('dash/vendor/animated-icons/search-cancel/search-cancel.json')}}"
                  ></div>
                </span>
              </span>
            </div>
            <input
              type="text"
              placeholder="Search dashboard"
              class="form-control"
            />
          </div>
          <ul class="ml-auto menu-right navbar-nav">
            <li class="nav-item">
              <a class="nav-link toggle-fullscreen" href="javascript:;">
                <span class="animated-icon">
                  <div
                    style="width:18px;height:18px"
                    data-animation-path="{{asset('dash/vendor/animated-icons/fullscreen/fullscreen.json')}}"
                  ></div>
                </span>
              </a>
            </li>
            <li class="dropdown nav-item">
              <a
                data-toggle="dropdown"
                aria-haspopup="true"
                href="#"
                class="nav-link"
                aria-expanded="false"
              >
                <span class="animated-icon">
                  <div
                    style="width:18px;height:18px"
                    data-animation-path="{{asset('dash/vendor/animated-icons/toggle/toggle.json')}}"
                  ></div>
                </span>
              </a>
              <div
                tabindex="-1"
                role="menu"
                aria-hidden="true"
                class="app-settings dropdown-menu dropdown-menu-right"
              >
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="dropdown-item"
                >
                  Settings
                </button>
                <div tabindex="-1" class="m-0 dropdown-divider"></div>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="darkModeOption" class="m-0">Dark mode</label>
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="darkModeOption"
                      name="darkModeOption"
                      class="custom-control-input"
                    />
                    <label
                      class="custom-control-label"
                      for="darkModeOption"
                    ></label>
                  </div>
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="boxedOption" class="m-0">Boxed layout</label>
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="boxedOption"
                      name="boxedOption"
                      class="custom-control-input"
                    />
                    <label
                      class="custom-control-label"
                      for="boxedOption"
                    ></label>
                  </div>
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="stickyHeaderOption" class="m-0"
                    >Sticky header</label
                  >
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="stickyHeaderOption"
                      name="stickyHeaderOption"
                      class="custom-control-input"
                    />
                    <label
                      class="custom-control-label"
                      for="stickyHeaderOption"
                    ></label>
                  </div>
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="stickySidebarOption" class="m-0"
                    >Sticky sidebar</label
                  >
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="stickySidebarOption"
                      name="stickySidebarOption"
                      class="custom-control-input"
                      checked=""
                    />
                    <label
                      class="custom-control-label"
                      for="stickySidebarOption"
                    ></label>
                  </div>
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="collapsedSidebarOption" class="m-0"
                    >Collapsed sidebar</label
                  >
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="collapsedSidebarOption"
                      name="collapsedSidebarOption"
                      class="custom-control-input"
                    />
                    <label
                      class="custom-control-label"
                      for="collapsedSidebarOption"
                    ></label>
                  </div>
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="topHeaderOption" class="m-0">Top header</label>
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="topHeaderOption"
                      name="topHeaderOption"
                      class="custom-control-input"
                    />
                    <label
                      class="custom-control-label"
                      for="topHeaderOption"
                    ></label>
                  </div>
                </button>
              </div>
            </li>
            <li class="dropdown nav-item">
              <a
                data-toggle="dropdown"
                aria-haspopup="true"
                href="#"
                class="nav-link"
                aria-expanded="false"
              >
                <span class="animated-icon">
                  <div
                    style="width:18px;height:18px"
                    data-animation-path="vendor/animated-icons/globe/globe.json"
                  ></div>
                </span>
                <span class="badge-top badge badge-danger badge-pill">6</span>
              </a>
              <div
                tabindex="-1"
                role="menu"
                aria-hidden="true"
                class="app-notifications dropdown-menu dropdown-menu-right"
              >
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="dropdown-item"
                >
                  Notifications
                </button>
                <div tabindex="-1" class="m-0 dropdown-divider"></div>
                <div class="app-notifications-inner">
                  <ul class="list-group">
                    <a
                      href="#"
                      class="w-100 d-flex flex-row align-items-center list-group-item-action list-group-item"
                    >
                      <span class="mr-3">
                        <span
                          class="position-relative d-flex rounded-circle"
                          style="width: 40px; height: 40px;"
                        >
                          <img
                            src="images/face2.jpg"
                            alt="Amber McCoy"
                            width="40px"
                            height="40px"
                            class="rounded-circle"
                          />
                        </span>
                      </span>
                      <span>Amber McCoy has joined your mailing list</span>
                    </a>
                    <a
                      href="#"
                      class="w-100 d-flex flex-row align-items-center list-group-item-action list-group-item"
                    >
                      <span class="mr-3">
                        <span
                          class="position-relative d-flex rounded-circle"
                          style="width: 40px; height: 40px;"
                        >
                          <img
                            src="images/face2.jpg"
                            alt="Danielle Perkins"
                            width="40px"
                            height="40px"
                            class="rounded-circle"
                          />
                        </span>
                      </span>
                      <span>Danielle Perkins created a new task list</span>
                    </a>
                    <a
                      href="#"
                      class="w-100 d-flex flex-row align-items-center list-group-item-action list-group-item"
                    >
                      <span class="mr-3">
                        <span
                          class="position-relative d-flex rounded-circle"
                          style="width: 40px; height: 40px;"
                        >
                          <img
                            src="images/face4.jpg"
                            alt="Megan Hanson"
                            width="40px"
                            height="40px"
                            class="rounded-circle"
                          />
                        </span>
                      </span>
                      <span>Megan Hanson created a new task list</span>
                    </a>
                  </ul>
                </div>
                <div
                  class="d-flex align-items-center justify-content-between py-2 px-3"
                >
                  <span>
                    <span class="badge badge-danger badge-pill">4</span>
                    <small class="mr-auto ml-1">Notifications</small>
                  </span>
                  <button
                    type="button"
                    class="button-shadow btn btn-outline-secondary btn-sm"
                  >
                    load more
                  </button>
                </div>
              </div>
            </li>
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
                    src="images/avatar.jpg"
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
                  Settings
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="dropdown-item"
                >
                  Profile
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="dropdown-item"
                >
                  Notifications
                </button>
                <div tabindex="-1" class="dropdown-divider"></div>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="dropdown-item"
                >
                  Signout
                </button>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <div class="position-relative d-flex flex-row flex-fill page-wrapper">
        <div
          class="sidebar bg-dark page-sidebar"
          style="transform:translateX(0);min-width:280px;max-width:280px"
        >
          <div class="h-100 d-flex flex-column flex-1">
            <nav
              class="navbar navbar-expand-md  d-none d-lg-flex d-xl-flex bg-dark"
            >
              <a href="#" class="navbar-brand">
                <svg width="24" height="24">
                  <use xlink:href="#logo-icon"></use>
                </svg>
                <span class="ml-3">Kasu</span>
              </a>
              <a href="javascript:;" class="nav-toggle">
                <span class="animated-icon">
                  <div
                    style="width:24px;height:24px"
                    data-animation-path="vendor/animated-icons/menu-back/menu-back.json"
                    data-anim-loop="false"
                  ></div>
                </span>
              </a>
            </nav>
            <ul class="d-block scroll-y flex-1 py-3 nav flex-column">
              <div class="sidebar-item">
                <li class="nav-item">
                  <a
                    class="nav-link d-flex align-items-center nav-link"
                    href="{{ route('dashboard') }}"
                  >
                    <span class="animated-icon">
                      <div
                        style="width:18px;height:18px"
                        data-animation-path="{{asset('dash/vendor/animated-icons/ok/ok.json')}}"
                        data-anim-loop="false"
                      ></div>
                    </span>
                    <span class="mr-auto menu-name">Home</span>
                  </a>
                </li>
              </div>
              @if(auth()->user()->role === 'admin')
              <div class="sidebar-item">
                  <li class="nav-item ">
                  <a
                    class="nav-link d-flex align-items-center nav-link"
                    href="{{ route('dashboard') }}"
                  >
                    <span class="animated-icon">
                      <div
                        style="width:18px;height:18px"
                        data-animation-path="{{asset('dash/vendor/animated-icons/shopping/shopping.json')}}"
                        data-anim-loop="false"
                      ></div>
                    </span>
                    <span class="mr-auto menu-name">Products</span>
                    <span class="badge badge-danger badge-pill">{{ $product_count }}</span>
                  </a>
                </li>
                </div>
                <div class="sidebar-item">
                  <li class="nav-item ">
                  <a
                    class="nav-link d-flex align-items-center nav-link"
                    href="{{ route('reviews') }}"
                  >
                    <span class="animated-icon">
                      <div
                        style="width:18px;height:18px"
                        data-animation-path="{{asset('dash/vendor/animated-icons/two-circles-4/two-circles-4.json')}}"
                        data-anim-loop="false"
                      ></div>
                    </span>
                    <span class="mr-auto menu-name">Reviews</span>
                    <span class="badge badge-danger badge-pill">{{ $review_count }}</span>
                  </a>
                </li>
                </div>
                <div class="sidebar-item">
                  <li class="nav-item ">
                  <a
                    class="nav-link d-flex align-items-center nav-link"
                    href="{{ route('suggestions') }}"
                  >
                    <span class="animated-icon">
                      <div
                        style="width:18px;height:18px"
                        data-animation-path="{{asset('dash/vendor/animated-icons/book/book.json')}}"
                        data-anim-loop="false"
                      ></div>
                    </span>
                    <span class="mr-auto menu-name">Suggestions</span>
                    <span class="badge badge-danger badge-pill">{{ $suggestion_count }}</span>
                  </a>
                </li>
                </div>
              @else
              <div class="sidebar-item">

                <li class="nav-item ">
                  <a
                    class="nav-link d-flex align-items-center nav-link"
                    href="{{ route('products') }}"
                  >
                    <span class="animated-icon">
                      <div
                        style="width:18px;height:18px"
                        data-animation-path="{{asset('dash/vendor/animated-icons/book/book.json')}}"
                        data-anim-loop="false"
                      ></div>
                    </span>
                    <span class="mr-auto menu-name">Products</span>
                    <span class="badge badge-danger badge-pill"></span>
                  </a>
                </li>
              </div>
              <div class="sidebar-item">
                <li class="nav-item">
                  <a
                    class="nav-link d-flex align-items-center nav-link"
                    href="{{ route('shop_name', Auth::user()->id) }}"
                  >
                    <span class="animated-icon">
                      <div
                        style="width:18px;height:18px"
                        data-animation-path="{{ asset('dash/vendor/animated-icons/shopping-bag/shopping-bag.json') }}"
                        data-anim-loop="false"
                      ></div>
                    </span>
                    <span class="mr-auto menu-name">Shop</span>
                  </a>
                </li>
              </div>
              @endif
              <div class="sidebar-item">
                <li class="nav-item">
                  <a
                    class="nav-link d-flex align-items-center nav-link"
                    href="/"
                    target="_blank"
                  >
                    <span class="animated-icon">
                      <div
                        style="width:18px;height:18px"
                        data-animation-path="{{ asset('dash/vendor/animated-icons/menu-forward/menu-forward.json') }}"
                        data-anim-loop="false"
                      ></div>
                    </span>
                    <span class="mr-auto menu-name">Main Website</span>
                  </a>
                </li>
              </div>
              {{-- <div class="sidebar-item">
                <li class="nav-item ">
                  <a
                    class="nav-link d-flex align-items-center nav-link"
                    href="javascript:;"
                  >
                    <span class="animated-icon">
                      <div
                        style="width:18px;height:18px"
                        data-animation-path="vendor/animated-icons/folder/folder.json"
                        data-anim-loop="false"
                      ></div>
                    </span>
                    <span class="mr-auto menu-name">Bootstrap UI</span>
                    <span class="caret">
                      <span class="animated-icon">
                        <div
                          style="width:12px;height:12px"
                          data-animation-path="vendor/animated-icons/expand/expand.json"
                        ></div>
                      </span>
                    </span>
                  </a>
                  <div class="sub-menu collapse " aria-expanded="false">
                    <ul class="nav flex-column">
                      <li class="nav-item ">
                        <a href="bootstrap-ui-alerts.html" class="nav-link">
                          <span class="mr-auto menu-name">Alerts</span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a href="bootstrap-ui-badge.html" class="nav-link">
                          <span class="mr-auto menu-name">Badge</span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a href="bootstrap-ui-buttons.html" class="nav-link">
                          <span class="mr-auto menu-name">Buttons</span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a href="bootstrap-ui-card.html" class="nav-link">
                          <span class="mr-auto menu-name">Card</span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a href="bootstrap-ui-carousel.html" class="nav-link">
                          <span class="mr-auto menu-name">Carousel</span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a href="bootstrap-ui-jumbotron.html" class="nav-link">
                          <span class="mr-auto menu-name">Jumbotron</span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a href="bootstrap-ui-list-group.html" class="nav-link">
                          <span class="mr-auto menu-name">List Group</span>
                        </a>
                      </li>

                      <li class="nav-item ">
                        <a href="bootstrap-ui-progress.html" class="nav-link">
                          <span class="mr-auto menu-name">Progress</span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a href="bootstrap-ui-other.html" class="nav-link">
                          <span class="mr-auto menu-name">Other</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </div> --}}
              {{-- <div class="sidebar-item">
                <li class="nav-item ">
                  <a
                    class="nav-link d-flex align-items-center nav-link"
                    href="messages.html"
                  >
                    <span class="animated-icon">
                      <div
                        style="width:18px;height:18px"
                        data-animation-path="{{asset('dash/vendor/animated-icons/speech/speech.json')}}"
                        data-anim-loop="false"
                      ></div>
                    </span>
                    <span class="mr-auto menu-name">Shop Settings</span>
                  </a>
                </li>
              </div> --}}

            <div class="sidebar-item">
                <li class="nav-item ">
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a
                    class="nav-link d-flex align-items-center nav-link"
                    onclick="event.preventDefault();
                      this.closest('form').submit();"
                    >
                    <span class="animated-icon">
                      <div
                        style="width:18px;height:18px"
                        data-animation-path="{{asset('dash/vendor/animated-icons/delete/delete.json')}}"
                        data-anim-loop="false"
                      ></div>
                    </span>

                    <span class="mr-auto menu-name">Logout</span>
                    
                  </a>
                  </form>
                  
                </li>
              </div>
            </ul>
          </div>
        </div>
        <div class="page-overlay" style="visibility:hidden;opacity:0"></div>