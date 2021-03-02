@extends('vendor.layouts.vendor_layout')

@section('content')
<div class="page-inner bg-light ">
    {{-- <div class="row">
      <div class="col">
        <div class="card">
          <div
            class="d-flex justify-content-between align-items-center card-header"
          >
            <div>
              <span>Sale Analytics</span>
              <small class="d-block text-muted"
                >Percentage change
                <span class="text-danger">▼95.87%</span>
              </small>
            </div>
            <div>
              <div
                class="button-shadow btn-group-sm btn-group"
                role="group"
              >
                <button class="btn btn-outline-secondary">
                  24 Hours
                </button>
                <button class="btn btn-outline-secondary">
                  7 Days
                </button>
                <button class="btn btn-outline-secondary">
                  1 Month
                </button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="d-none d-sm-flex justify-content-between pb-4">
              <div class="text-success">
                <h5 class="mb-0">
                  <strong>
                    34.45B
                  </strong>
                </h5>
                <small>Aggregate Income</small>
              </div>
              <div class="d-sm-flex justify-content-around">
                <div class="pr-5">
                  <h5 class="mb-0">
                    <strong>92.83</strong>
                  </h5>
                  <small>Average impressions</small>
                </div>
                <div class="pr-5 text-danger">
                  <h5 class="mb-0">
                    <strong>45.08%</strong>
                  </h5>
                  <small>Engagement rate</small>
                </div>
                <div>
                  <h5 class="mb-0">
                    <strong>783</strong>
                  </h5>
                  <small>Growth Rate</small>
                </div>
              </div>
            </div>
            <canvas height="60" id="mainChart"></canvas>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="row">
      @if(auth()->user()->role === 'admin') 
      <div class="col-sm-6 col-md-3">
        <div class="card card-body ">
          <div class=" justify-content-start align-items-center row ">
            <div class="col-auto ">
              <button
                type="button"
                class="btn btn-primary"
                style="padding: 0.1rem; border-radius: 50%; min-width: 32px; min-height: 32px;"
              >
                <span class="animated-icon">
                  <div
                    style=" width:22px;height:22px "
                    data-animation-path="vendor/animated-icons/heart/heart.json"
                    data-loop="false"
                    data-auto-play="false"
                  ></div>
                </span>
              </button>
            </div>
            
            
            <div class="col-auto">
              <h5 class="stat-widget-title mb-0 fw-400 ">{{ $product_count }}</h5>
              <h6 class="stat-widget-subtitle ">Products</h6>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-body ">
          <div class=" justify-content-start align-items-center row ">
            <div class="col-auto ">
              <button
                type="button"
                class="btn btn-primary"
                style="padding: 0.1rem; border-radius: 50%; min-width: 32px; min-height: 32px;"
              >
                <span class="animated-icon">
                  <div
                    style=" width:22px;height:22px "
                    data-animation-path="vendor/animated-icons/heart/heart.json"
                    data-loop="false"
                    data-auto-play="false"
                  ></div>
                </span>
              </button>
            </div>
            
            
            <div class="col-auto">
              <h5 class="stat-widget-title mb-0 fw-400 ">{{ $user_count }}</h5>
              <h6 class="stat-widget-subtitle ">Users</h6>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-body ">
          <div class=" justify-content-start align-items-center row ">
            <div class="col-auto ">
              <button
                type="button"
                class="btn btn-primary"
                style="padding: 0.1rem; border-radius: 50%; min-width: 32px; min-height: 32px;"
              >
                <span class="animated-icon">
                  <div
                    style=" width:22px;height:22px "
                    data-animation-path="vendor/animated-icons/heart/heart.json"
                    data-loop="false"
                    data-auto-play="false"
                  ></div>
                </span>
              </button>
            </div>
            
            
            <div class="col-auto">
              <h5 class="stat-widget-title mb-0 fw-400 ">{{ $suggestion_count }}</h5>
              <h6 class="stat-widget-subtitle ">Suggestions</h6>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-body ">
          <div class=" justify-content-start align-items-center row ">
            <div class="col-auto ">
              <button
                type="button"
                class="btn btn-primary"
                style="padding: 0.1rem; border-radius: 50%; min-width: 32px; min-height: 32px;"
              >
                <span class="animated-icon">
                  <div
                    style=" width:22px;height:22px "
                    data-animation-path="vendor/animated-icons/heart/heart.json"
                    data-loop="false"
                    data-auto-play="false"
                  ></div>
                </span>
              </button>
            </div>
            
            
            <div class="col-auto">
              <h5 class="stat-widget-title mb-0 fw-400 ">{{ $review_count }}</h5>
              <h6 class="stat-widget-subtitle ">Reviews</h6>
            </div>
            
          </div>
        </div>
      </div>
     {{--  <div class="col-sm-6 col-md-3">
        <div class="card card-body ">
          <div class=" justify-content-start align-items-center row ">
            <div class="col-auto ">
              <button
                type="button"
                class="btn btn-secondary"
                style="padding: 0.1rem; border-radius: 50%; min-width: 32px; min-height: 32px;"
              >
                <span class="animated-icon">
                  <div
                    style=" width:22px;height:22px "
                    data-animation-path="vendor/animated-icons/online/online.json"
                    data-loop="false"
                    data-auto-play="false"
                  ></div>
                </span>
              </button>
            </div>
            <div class="col-auto">
              <h5 class="stat-widget-title mb-0 fw-400 ">99.99%</h5>
              <h6 class="stat-widget-subtitle ">Uptime</h6>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="col-sm-6 col-md-3">
        <div class="card card-body ">
          <div class=" justify-content-start align-items-center row ">
            <div class="col-auto ">
              <button
                type="button"
                class="btn btn-warning"
                style="padding: 0.1rem; border-radius: 50%; min-width: 32px; min-height: 32px;"
              >
                <span class="animated-icon">
                  <div
                    style=" width:22px;height:22px "
                    data-animation-path="vendor/animated-icons/activity/activity.json"
                    data-loop="false"
                    data-auto-play="false"
                  ></div>
                </span>
              </button>
            </div>
            <div class="col-auto">
              <h5 class="stat-widget-title mb-0 fw-400 ">465K</h5>
              <h6 class="stat-widget-subtitle ">Visitors</h6>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="col-sm-6 col-md-3">
        <div class="card card-body ">
          <div class=" justify-content-start align-items-center row ">
            <div class="col-auto ">
              <button
                type="button"
                class="btn btn-danger"
                style="padding: 0.1rem; border-radius: 50%; min-width: 32px; min-height: 32px;"
              >
                <span class="animated-icon">
                  <div
                    style=" width:22px;height:22px "
                    data-animation-path="vendor/animated-icons/thumb/thumb.json"
                    data-loop="false"
                    data-auto-play="false"
                  ></div>
                </span>
              </button>
            </div>
            <div class="col-auto">
              <h5 class="stat-widget-title mb-0 fw-400 ">7,578</h5>
              <h6 class="stat-widget-subtitle ">Likes</h6>
            </div>
          </div>
        </div>
      </div> --}}
      @else  
        <div class="col-auto">
          <h5 class="stat-widget-title mb-0 fw-400 ">576K</h5>
          <h6 class="stat-widget-subtitle ">Products</h6>
        </div>
        @endif
    </div>

    <div class="row">
      @if(auth()->user()->role === 'admin')
      <div class="col-xs-12 col-sm-12">
        <div class="card">
          <div class="card-header">Products</div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>S/No</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Vendor</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($admin_products as $key=>$product)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $product->title }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->user->name }}</td>
                      <td>
                        <form action="{{ route('admin_delete_product', $product->slug) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <tr><div class="alert alert-danger">No Products</div></p></tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="col-xs-12 col-sm-6">
        <div class="mb-4 card">
          <div class="card-header">
            <b>Add Product Form</b>
          </div>
          <div class="card-body">
            <form class="">
              <div class="form-group">
                <label class="" for="exampleEmail">Title</label>
                <input class="form-control" id="exampleEmail" name="title" placeholder="Product title" type="text">
              </div>

              <div class="form-group">
                <label class="" for="examplePassword">Price</label>
                <input class="form-control" id="examplePassword" name="price" placeholder="ex 100.00" type="text">
              </div>
              <div class="form-group">
                <label class="" for="exampleFile">Image</label>
                <input class="form-control-file" id="exampleFile" name="image" type="file">
                <small class="form-text text-muted">Allowed types jpeg,jpg,png.</small>
              </div>
              <div class="form-group">
                <label class="" for="exampleText">Description</label>
                <textarea class="form-control" id="exampleText" name="text"></textarea>
              </div>
              
              <button class="btn btn-secondary" type="submit">Submit</button>
            </form>
          </div>
        </div>
        {{-- <div class="mb-4 card">
          <div class="card-header">
            <b>Form grid</b>
          </div>
          <div class="card-body">
            <form class="">
              <div class="row form-group">
                <label class="col-sm-2 col-form-label" for="exampleEmail">Email</label>
                <div class="col-sm-10">
                  <input class="form-control" id="exampleEmail" name="email" placeholder="with a placeholder" type="email">
                </div>
              </div>
              <div class="row form-group">
                <label class="col-sm-2 col-form-label" for="examplePassword">Password</label>
                <div class="col-sm-10">
                  <input class="form-control" id="examplePassword" name="password" placeholder="password placeholder" type="password">
                </div>
              </div>
              <div class="row form-group">
                <label class="col-sm-2 col-form-label" for="exampleSelect">Select</label>
                <div class="col-sm-10">
                  <select class="form-control" id="exampleSelect" name="select"></select>
                </div>
              </div>
              <div class="row form-group">
                <label class="col-sm-2 col-form-label" for="exampleSelectMulti">Select Multiple</label>
                <div class="col-sm-10">
                  <select class="form-control" id="exampleSelectMulti" multiple="" name="selectMulti"></select>
                </div>
              </div>
              <div class="row form-group">
                <label class="col-sm-2 col-form-label" for="exampleText">Text Area</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="exampleText" name="text"></textarea>
                </div>
              </div>
              <div class="row form-group">
                <label class="col-sm-2 col-form-label" for="exampleFile">File</label>
                <div class="col-sm-10">
                  <input class="form-control-file" id="exampleFile" name="file" type="file">
                  <small class="form-text text-muted">This is some placeholder block-level help text for
                    the above input. It's a bit lighter and easily wraps
                    to a new line.</small>
                </div>
              </div>
              <fieldset class="row form-group">
                <legend class="col-form-label col-sm-2">
                  Radio Buttons
                </legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" name="radio2" type="radio">
                      Option one is this and that—be sure to include why
                      it's great</label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" name="radio2" type="radio">
                      Option two can be something else and selecting it
                      will deselect option one</label>
                  </div>
                  <div class="form-check disabled">
                    <label class="form-check-label">
                      <input class="form-check-input" disabled="" name="radio2" type="radio">
                      Option three is disabled</label>
                  </div>
                </div>
              </fieldset>
              <div class="row form-group">
                <label class="col-sm-2 col-form-label" for="checkbox2">Checkbox</label>
                <div class="col-sm-10">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" id="checkbox2" type="checkbox">
                      Check me out</label>
                  </div>
                </div>
              </div>
              <div class="row form-check">
                <div class="col-sm-10 offset-sm-2">
                  <button class="btn btn-secondary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div> --}}
      </div>
      @endif
    </div>
  </div>

@endsection