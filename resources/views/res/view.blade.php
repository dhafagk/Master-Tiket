@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Detail Reservation</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/reservation">Reservation</a>
                </li>
                <li class="breadcrumb-item active">Detail Reservation
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
                  <h4 class="card-title" id="list-basic">Data Reservation</h4>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <div id="basic-list">

                      <ul class="list-group list">
                        <li class="list-group-item">
                          <h3 class="name">Reservation Code</h3>
                          <p class="born">{{$vation->reservation_code}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Reservation At</h3>
                          <p class="born">{{$vation->reservation_at}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Reservation Date</h3>
                          <p class="born">{{$vation->reservation_date}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Price</h3>
                          <p class="born">Rp.{{$vation->price}}.00</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Customer Name</h3>
                          <p class="born">{{$vation->customer['name']}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Seat Code</h3>
                          <p class="born">{{$vation->seat_code}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Rute</h3>
                          <p class="born">{{$vation->rute['depart_at']}} = {{$vation->rute['rute_from']}} - {{$vation->rute['rute_to']}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Depart At</h3>
                          <p class="born">{{$vation->depart_at}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Username</h3>
                          <p class="born">{{$vation->users['name']}}</p>
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