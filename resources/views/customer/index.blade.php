@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Customer</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Customer
                </li>
              </ol>
            </div>
          </div>
        </div>
      <div class="content-header-right col-md-6 col-12">

          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <button class="btn btn-info round box-shadow-2 px-2"
           type="button" aria-haspopup="true"
            aria-expanded="false"><a href="/customer/create" style="color:white;text-decoration: none"> Create Customer</a></button>
            
          </div>

          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <button style="margin-right: 10px" class="btn btn-info round box-shadow-2 px-2 dropdown-toggle"
           type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="true"><a href="#" style="color:white;text-decoration: none"> Print</a></button>
            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">PDF</a>
                              <a class="dropdown-item" href="#">CSV</a>
                            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- HTML (DOM) sourced data -->
        <section id="html5">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Data Customer</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                      <table class="table table-striped table-bordered dataex-html5-export">
                        <thead>
                          <tr>
                            <th>No</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Nomor Handphone</th>
                          <th>Jenis Kelamin</th>
                          <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($customerindex as $as)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{$as->name}}</td>
                          <td>{{$as->address}}</td>
                          <td>(+62) {{$as->phone}}</td>
                          <td>
                            @if($as->gender == "P")
                              Perempuan
                              @elseif($as->gender == "L")
                              Laki-Laki
                              @endif
                          </td>
                          <td><div class="btn-group">
                            <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="dropdown">Info</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="/customer/{{$as->id}}">Detail</a>

                              <a class="dropdown-item" href="/customer/{{$as->id}}/edit">Edit</a>
                              <a class="dropdown-item" href="{{url('customer/delete',$as->id)}}">Delete</a>
                            </div>
                          </div></td>
                        </tr>
                        @endforeach
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- <section id="html">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Data Customer</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered sourced-data">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Nomor Handphone</th>
                          <th>Jenis Kelamin</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($customerindex as $as)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{$as->name}}</td>
                          <td>{{$as->address}}</td>
                          <td>(+62) {{$as->phone}}</td>
                          <td>
                            @if($as->gender == "P")
                              Perempuan
                              @elseif($as->gender == "L")
                              Laki-Laki
                              @endif
                          </td>
                          <td><div class="btn-group">
                            <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="dropdown">Info</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="/customer/{{$as->id}}">Detail</a>

                              <a class="dropdown-item" href="/customer/{{$as->id}}/edit">Edit</a>
                              <a class="dropdown-item" href="{{url('customer/delete',$as->id)}}">Delete</a>
                            </div>
                          </div></td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <!--/ HTML (DOM) sourced data -->
        
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('layouts.footer')