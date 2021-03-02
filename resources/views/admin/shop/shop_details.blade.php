@extends('vendor.layouts.vendor_layout')

@section('content')
<div class="page-inner bg-light ">
    <div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="mb-3 card">
                    <div
                      class="p-0 border-0 bg-dark rounded-top card-body"
                      style="background-image: url(images/unsplash/4.jpg); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;"
                    >
                      <div
                        class="d-flex justify-content-between align-items-center p-3"
                      >
                        <div class="d-flex align-items-center">
                          <a href="#" class="widget-icon-xlg">
                            <span
                              class="position-relative d-flex rounded-circle"
                              style="width: 64px; height: 64px;"
                            >
                              <img
                                src="images/avatar.jpg"
                                alt="avatar"
                                width="64px"
                                height="64px"
                                class="rounded-circle"
                              />
                            </span>
                          </a>
                          <div class="d-inline-block px-3">
                            <h5 class="my-0 text-light">
                              <span class="fw-400">{{ $user->name }}</span>
                            </h5>
                            <small class="text-light m-r">Vendor</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="p-2">
                      <ul class="nav" id="socialTab" role="tablist">
                        {{-- <li class="nav-item">
                          <a
                            class="text-primary nav-link"
                            data-toggle="tab"
                            href="#activity"
                            role="tab"
                            aria-controls="activity"
                            aria-selected="true"
                            >Activity</a
                          >
                        </li> --}}
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            data-toggle="tab"
                            href="#about"
                            role="tab"
                            aria-controls="about"
                            aria-selected="false"
                            >About me</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            data-toggle="tab"
                            href="#friends"
                            role="tab"
                            aria-controls="friends"
                            aria-selected="false"
                            >Shop Settings</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            data-toggle="tab"
                            href="#profile"
                            role="tab"
                            aria-controls="profile"
                            aria-selected="false"
                            >Account &amp; Profile</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8">
                  <div class="tab-content">
                    
                    <div
                      class="tab-pane fade show active"
                      id="about"
                      role="tabpanel"
                      aria-labelledby="about-tab"
                    >
                      <div class="card">
                        <div class="divider">
                          <span class="divider-inner">
                            <small>About me</small>
                          </span>
                        </div>
                        <div class="card-body">
                          <div class="d-flex mb-2 justify-content-around">
                            <div class="w-50">
                              <small class="d-block text-muted">Mobile</small>
                              <span>{{ $user->phone }}</span>
                            </div>
                          </div>
                          <div class="d-flex mb-2 justify-content-around">
                            <div class="w-50">
                              <small class="d-block text-muted"
                                >Email</small
                              >
                              <span>{{ $user->email }}</span>
                            </div>
                          </div>
                          <div class="d-flex mb-2 justify-content-around">
                            <div class="w-50">
                              <small class="d-block text-muted">Shop Name</small>
                              <span>{{ $user->shop_name }}</span>
                            </div>
                          </div>
                        </div>
                        <div class="divider">
                          <span class="divider-inner">
                            <small>Address</small>
                          </span>
                        </div>
                        <div class="card-body">
                          <p>
                            {{ $user->address }}
                          </p>
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="friends"
                      role="tabpanel"
                      aria-labelledby="friends-tab"
                    >
                      <div class="card">
                        <form class="" action="{{ route('update_shop', Auth::User()->id) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <div class="divider">
                            <span class="divider-inner">
                              <small>Shop information</small>
                            </span>
                          </div>
                          <div class="card-body">
                            <div class="row form-group">
                              <label
                                for="fname"
                                class="text-right col-sm-3 col-form-label"
                                >Shop name</label
                              >
                              <div class="col-sm-7">
                                <input
                                  name="shop_name"
                                  id="fname"
                                  placeholder="Shop name"
                                  type="text"
                                  class="form-control"
                                  value="{{ $user->shop_name }}"
                                />
                              </div>
                            </div>
                            <div class="row form-group">
                              <label
                                for="lname"
                                class="text-right col-sm-3 col-form-label"
                                >Address</label
                              >
                              <div class="col-sm-7">
                                <input
                                  name="address"
                                  id="lname"
                                  placeholder="Address"
                                  type="text"
                                  class="form-control"
                                />
                              </div>
                            </div>
                            <div class="row form-group">
                              <label
                                for="phone"
                                class="text-right col-sm-3 col-form-label"
                                >Phone number</label
                              >
                              <div class="col-sm-7">
                                <input
                                  name="phone"
                                  id="phone"
                                  placeholder="Phone"
                                  type="text"
                                  class="form-control"
                                />
                              </div>
                            </div>
                            <div class="row form-group">
                              <label
                                for="company"
                                class="text-right col-sm-3 col-form-label"
                                >Image</label
                              >
                              <div class="col-sm-7">
                                <input
                                  name="image"
                                  id="company"
                                  placeholder="Company"
                                  type="file"
                                  class="form-control"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="pt-1 pb-3">
                            <div class="row form-check">
                              <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <span class="px-1"></span>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="profile"
                      role="tabpanel"
                      aria-labelledby="profile-tab"
                    >
                      <div class="card">
                        <form class="">
                          <div class="divider">
                            <span class="divider-inner">
                              <small>Basic information</small>
                            </span>
                          </div>
                          <div class="card-body">
                            <div class="row form-group">
                              <label
                                for="fname"
                                class="text-right col-sm-3 col-form-label"
                                >Name</label
                              >
                              <div class="col-sm-7">
                                <input
                                  name="fname"
                                  id="fname"
                                  placeholder="First name"
                                  type="text"
                                  class="form-control"
                                />
                              </div>
                            </div>
                            <div class="row form-group">
                              <label
                                for="email"
                                class="text-right col-sm-3 col-form-label"
                                >Email</label
                              >
                              <div class="col-sm-7">
                                <input
                                  name="email"
                                  id="email"
                                  placeholder="Email"
                                  type="email"
                                  class="form-control"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="pt-1 pb-3">
                            <div class="row form-check">
                              <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <span class="px-1"></span>
                                <button class="btn btn-secondary">
                                  Cancel
                                </button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
               {{--  <div class="col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="w-50">
                          <h4 class="m-0">
                            <span class="fw-400">Gerald</span>
                            <b>Morris</b>
                          </h4>
                          <small>gerald@morris.com</small>
                          <p class="my-2">UX Developer</p>
                          <a href="#" class="mt-0 d-block">email@contact.com</a>
                          <a href="#" class="mt-1 d-block">www.example.com</a>
                          <a href="#" class="mt-1 d-block">+1234567890</a>
                        </div>
                        <div class="w-50">
                          <div
                            class="text-center d-flex justify-content-center"
                          >
                            <span
                              class="position-relative d-flex rounded-circle"
                              style="width: 128px; height: 128px;"
                            >
                              <img
                                src="images/avatar.jpg"
                                alt="avatar"
                                width="128px"
                                height="128px"
                                class="rounded-circle"
                            /></span>
                          </div>
                          <div class="m-1 text-center">
                            <p class="mb-1">Account Storage</p>
                            <div class="progress">
                              <div
                                class="progress-bar bg-info"
                                role="progressbar"
                                aria-valuenow="60"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                style="width: 60%;"
                              >
                                Documents
                              </div>
                              <div
                                class="progress-bar bg-secondary"
                                role="progressbar"
                                aria-valuenow="40"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                style="width: 40%;"
                              >
                                Unused
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="divider">
                      <span class="divider-inner">
                        <small>Stats</small>
                      </span>
                    </div>
                    <div class="card-body">
                      <div class="text-center row">
                        <div class="col">
                          <h2 class="m-0">
                            <b>23,8K</b>
                          </h2>
                          <small>Followers</small>
                        </div>
                        <div class="col">
                          <h2 class="m-0">
                            <b>569</b>
                          </h2>
                          <small>Following</small>
                        </div>
                        <div class="col">
                          <h2 class="m-0">
                            <b>67</b>
                          </h2>
                          <small>Posts</small>
                        </div>
                      </div>
                    </div>
                    <div class="divider">
                      <span class="divider-inner">
                        <small>About me</small>
                      </span>
                    </div>
                    <div class="card-body">
                      <p>
                        Maecenas sed diam eget risus varius blandit sit amet non
                        magna. Curabitur blandit tempus porttitor. Vestibulum id
                        ligula porta felis euismod semper.
                      </p>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
      </div>
    </div>
  </div>

@endsection