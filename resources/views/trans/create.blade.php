@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Create Customer</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/trans">Transportation</a>
                </li>
                <li class="breadcrumb-item active">Create Transportation
                </li>
              </ol>
            </div>
          </div>
        </div>

      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
          <div class="row justify-content-md-center">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-card-center">Create Data</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">

                    <form action="/trans" method="post" class="form">
                    	{{csrf_field()}}
                      <div class="form-body">

                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                          <label for="issueinput1">Code</label>

                          <input type="text" id="issueinput1" class="form-control" placeholder="Code"
                          name="code" data-toggle="tooltip" data-trigger="hover"
                          data-placement="top" data-title="Nama Lengkap">

                          @if ($errors->has('code'))
				          <span class="help-block">
				            <strong>{{ $errors->first('code') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="issueinput1">Description</label>

                          <input type="text" id="issueinput1" class="form-control" placeholder="Description"
                          name="description" data-toggle="tooltip" data-trigger="hover"
                          data-placement="top" data-title="Nama Lengkap">

                          @if ($errors->has('description'))
				          <span class="help-block">
				            <strong>{{ $errors->first('description') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('seat_qty') ? ' has-error' : '' }}">
                          <label for="issueinput1">Seat QTY</label>

                          <input type="text" id="issueinput1" class="form-control" placeholder="Seat QTY"
                          name="seat_qty" data-toggle="tooltip" data-trigger="hover"
                          data-placement="top" data-title="Nama Lengkap">

                          @if ($errors->has('seat_qty'))
				          <span class="help-block">
				            <strong>{{ $errors->first('seat_qty') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group">
                          <label for="issueinput5">Transportation Type</label>
                          <select id="issueinput5" name="transportation_typeid" class="form-control" data-toggle="tooltip"
                          data-trigger="hover" data-placement="top" data-title="Transportation Type">
                          	<option value="">--SELECT--</option>
                            @foreach($transport as $u)
				            <option value="{{$u->id}}">{{$u->description}}</option>
				            @endforeach
                          </select>
                        </div>

                      </div>
                      <div class="form-actions center">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> <a href="/trans" style="color:white;text-decoration: none;">Cancel</a>
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('layouts.footer')