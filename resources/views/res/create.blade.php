@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Create Reservation</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/reservation">Reservation</a>
                </li>
                <li class="breadcrumb-item active">Create Reservation
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

                    <form action="/reservation" method="post" class="form">
                    	{{csrf_field()}}
                    	<input type="hidden" name="userid" value="{{Auth::user()->id}}">
                      <div class="form-body">

                        <div class="form-group{{ $errors->has('reservation_code') ? ' has-error' : '' }}">
                          <label for="issueinput1">Reservation Code</label>

                          <input type="text" id="issueinput1" class="form-control" placeholder="Reservation Code"
                          name="reservation_code" data-toggle="tooltip" data-trigger="hover"
                          data-placement="top" data-title="Reservation Code">

                          @if ($errors->has('reservation_code'))
				          <span class="help-block">
				            <strong>{{ $errors->first('reservation_code') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('reservation_at') ? ' has-error' : '' }}">
                          <label for="issueinput1">Reservation At</label>

                          <input type="text" id="issueinput1" class="form-control" placeholder="Reservation At"
                          name="reservation_at" data-toggle="tooltip" data-trigger="hover"
                          data-placement="top" data-title="Reservation At">

                          @if ($errors->has('reservation_at'))
				          <span class="help-block">
				            <strong>{{ $errors->first('reservation_at') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('reservation_date') ? ' has-error' : '' }}">
                          <label for="issueinput1">Reservation Date</label>

                          <input type="date" id="issueinput1" class="form-control" placeholder="Reservation Date"
                          name="reservation_date" data-toggle="tooltip" data-trigger="hover"
                          data-placement="top" data-title="Reservation Date">

                          @if ($errors->has('reservation_date'))
				          <span class="help-block">
				            <strong>{{ $errors->first('reservation_date') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('seat_code') ? ' has-error' : '' }}">
                          <label for="issueinput1">Seat Code</label>

                          <input type="text" id="issueinput1" class="form-control" placeholder="Seat Code"
                          name="seat_code" data-toggle="tooltip" data-trigger="hover"
                          data-placement="top" data-title="Seat Code">

                          @if ($errors->has('seat_code'))
				          <span class="help-block">
				            <strong>{{ $errors->first('seat_code') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group">
                          <label for="issueinput5">Customer Name</label>
                          <select id="issueinput5" name="customerid" class="form-control" data-toggle="tooltip"
                          data-trigger="hover" data-placement="top" data-title="Customer Name">
                          	<option value="">--SELECT--</option>
                            @foreach($cus as $u)
				            <option value="{{$u->id}}">{{$u->name}}</option>
				            @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="issueinput5">Rute</label>
                          <select id="issueinput5" name="ruteid" class="form-control" data-toggle="tooltip"
                          data-trigger="hover" data-placement="top" data-title="Rute">
                          	<option value="">--SELECT--</option>
                            @foreach($rute as $as)
				            <option value="{{$as->id}}">{{$as->depart_at}} = {{$as->rute_from}} - {{$as->rute_to}} </option>
				            @endforeach
                          </select>
                        </div>

                        <div class="form-group{{ $errors->has('depart_at') ? ' has-error' : '' }}">
                          <label for="issueinput1">Depart At</label>

                          <input type="text" id="issueinput1" class="form-control" placeholder="Depart At"
                          name="depart_at" data-toggle="tooltip" data-trigger="hover"
                          data-placement="top" data-title="Nama Lengkap">

                          @if ($errors->has('depart_at'))
				          <span class="help-block">
				            <strong>{{ $errors->first('depart_at') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                          <label for="issueinput2">Price</label>
                          <fieldset>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp.</span>
                        </div>

                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="price">

                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">.00</span>
                        </div>

                        @if ($errors->has('price'))
				          <span class="help-block">
				            <strong>{{ $errors->first('price') }}</strong>
				          </span>
				          @endif
                      </div>
                    </fieldset>
                        </div>

                      </div>
                      <div class="form-actions center">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> <a href="/reservation" style="color:white;text-decoration: none;">Cancel</a>
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