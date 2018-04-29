@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Detail Customer</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/customer">Customer</a>
                </li>
                <li class="breadcrumb-item active">Detail Customer
                </li>
              </ol>
            </div>
          </div>
        </div>
      <div class="content-header-right col-md-6 col-12">

        </div>
      </div>
      <div class="content-body">
        <!-- HTML (DOM) sourced data -->
        <section id="lists">
          <div class="row match-height justify-content-md-center">
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="list-basic">Data Customer</h4>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <div id="basic-list">

                      <ul class="list-group list">
                        <li class="list-group-item">
                          <h3 class="name">Customer Name</h3>
                          <p class="born">{{$sa->name}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Alamat</h3>
                          <p class="born">{{$sa->address}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">No Telepon</h3>
                          <p class="born">(62+) {{$sa->phone}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Jenis Kelamin</h3>
                          <p class="born">@if($sa->gender == "P")
                              Perempuan
                              @elseif($sa->gender == "L")
                              Laki-Laki
                              @endif</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ HTML (DOM) sourced data -->
        
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('layouts.footer')