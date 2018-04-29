@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Edit Customer</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/customer">Customer</a>
                </li>
                <li class="breadcrumb-item active">Edit Customer
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

                    <form action="/customer/{{$toedit->id}}" method="post" class="form">
                    	{{csrf_field()}}
                    	<input type="hidden" name="_method" value="put">
                      <div class="form-body">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="issueinput1">Nama Lengkap</label>

                          <input type="text" id="issueinput1" class="form-control" placeholder="nama lengkap"
                          name="name" value="{{$toedit->name}}" data-toggle="tooltip" data-trigger="hover"
                          data-placement="top" data-title="Nama Lengkap" >

                          @if ($errors->has('name'))
				          <span class="help-block">
				            <strong>{{ $errors->first('name') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                          <label for="issueinput2">Alamat</label>
                          <textarea id="issueinput2" rows="5" class="form-control" name="address" placeholder="Tulis alamat lengkap"
                          data-toggle="tooltip" data-trigger="hover" data-placement="top"
                          data-title="alamat">{{$toedit->address}}</textarea>

                          @if ($errors->has('address'))
				          <span class="help-block">
				            <strong>{{ $errors->first('address') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                          <label for="issueinput2">No. Telp</label>
                          <fieldset>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">+62</span>
                        </div>

                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="phone" value="{{$toedit->phone}}">

                        @if ($errors->has('phone'))
				          <span class="help-block">
				            <strong>{{ $errors->first('phone') }}</strong>
				          </span>
				          @endif
                      </div>
                    </fieldset>
                        </div>

                        <div class="form-group">
                          <label for="issueinput5">Jenis Kelamin</label>
                          <select id="issueinput5" name="gender" class="form-control" data-toggle="tooltip"
                          data-trigger="hover" data-placement="top" data-title="Priority">
                          	<option value="">--SELECT--</option>
                            <option value="L"@if($toedit->gender == "L") selected @endif>Male</option>
            				<option value="P"@if($toedit->gender == "P") selected @endif>Female</option>
                          </select>
                        </div>

                      </div>
                      <div class="form-actions center">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i><a href="/customer" style="color:white;text-decoration: none;"> Cancel</a>
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