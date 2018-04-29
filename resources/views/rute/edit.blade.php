@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Edit Rute</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/rute">Rute</a>
                </li>
                <li class="breadcrumb-item active">Edit Rute
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
                  <h4 class="card-title" id="basic-layout-card-center">Edit Data</h4>
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

                    <form action="/rute/{{$rute->id}}" method="post" class="form">
                    	{{csrf_field()}}
                    	<input type="hidden" name="_method" value="put">
                      <div class="form-body">

                        <div class="form-group{{ $errors->has('depart_at') ? ' has-error' : '' }}">
                          <label for="issueinput1">Depart At</label>

                          <input type="text" id="issueinput1" class="form-control" placeholder="Depart At"
                          name="depart_at" value="{{$rute->depart_at}}" data-toggle="tooltip" data-trigger="hover"
                          data-placement="top" data-title="Nama Lengkap" >

                                    @if ($errors->has('depart_at'))
          				          <span class="help-block">
          				            <strong>{{ $errors->first('depart_at') }}</strong>
          				          </span>
          				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('rute_from') ? ' has-error' : '' }}">
                          <label for="issueinput2">Rute From</label>
                          <input id="issueinput2" class="form-control" name="rute_from" placeholder="Rute From"
                          data-toggle="tooltip" data-trigger="hover" data-placement="top"
                          data-title="alamat" value="{{$rute->rute_from}}">

                          @if ($errors->has('rute_from'))
        				          <span class="help-block">
        				            <strong>{{ $errors->first('rute_from') }}</strong>
        				          </span>
        				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('rute_to') ? ' has-error' : '' }}">
                          <label for="issueinput2">Rute To</label>
                          <input id="issueinput2" class="form-control" name="rute_to" placeholder="Rute To"
                          data-toggle="tooltip" data-trigger="hover" data-placement="top"
                          data-title="alamat" value="{{$rute->rute_to}}">

                          @if ($errors->has('rute_to'))
                          <span class="help-block">
                            <strong>{{ $errors->first('rute_to') }}</strong>
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

                              <input type="text" class="form-control" aria-describedby="basic-addon1" name="price" value="{{$rute->price}}">

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

                        <div class="form-group">
                          <label for="issueinput5">Transportation</label>
                          <select id="issueinput5" name="transportationid" class="form-control" data-toggle="tooltip"
                          data-trigger="hover" data-placement="top" data-title="Priority">
                          	<option value="">--SELECT--</option>
                            @foreach($trans as $u)
                            <option value="{{$u->id}}"
                            @if(($u->id) == ($rute->transportationid)) selected
                            @endif>
                            {{$u->code}}</option>
                            @endforeach
                          </select>
                        </div>

                      </div>
                      <div class="form-actions center">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i><a href="/rute" style="color:white;text-decoration: none;"> Cancel</a>
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