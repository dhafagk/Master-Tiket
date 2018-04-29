@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Detail Transportation</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/trans">Transportation</a>
                </li>
                <li class="breadcrumb-item active">Detail Transportation
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
                  <h4 class="card-title" id="list-basic">Data Transportation</h4>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <div id="basic-list">

                      <ul class="list-group list">
                        <li class="list-group-item">
                          <h3 class="name">Customer Code</h3>
                          <p class="born">{{$transport->code}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Description</h3>
                          <p class="born">{{$transport->description}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Seat Qty</h3>
                          <p class="born">{{$transport->seat_qty}}</p>
                        </li>
                        <li class="list-group-item">
                          <h3 class="name">Transportation Type</h3>
                          <p class="born">{{$transport->type['description']}}</p>
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