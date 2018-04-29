@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Detail Transportation Type</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/transtype">Transportation Type</a>
                </li>
                <li class="breadcrumb-item active">Detail Transportation Type
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
                  <h4 class="card-title" id="list-basic">Data Transportation Type</h4>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <div id="basic-list">

                        <li class="list-group-item">
                          <h3 class="name">Description</h3>
                          <p class="born">{{$types->description}}</p>
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