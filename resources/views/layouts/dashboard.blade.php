<!--/ Products sell and New Orders -->
        <div class="row match-height">
          <div class="col-xl-8 col-12" id="ecommerceChartView">
            <div class="card card-shadow">
              <div class="card-header card-header-transparent py-20">
                <div class="btn-group dropdown">
                  <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
                  <div class="dropdown-menu animate" role="menu">
                    <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                    <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                    <a class="dropdown-item" href="#" role="menuitem">profit</a>
                  </div>
                </div>
                <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                  <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                </ul>
              </div>
              <div class="widget-content tab-content bg-white p-20">
                <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">New Customer</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div id="new-orders" class="media-list position-relative">
                  <div class="table-responsive">
                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                      <thead>
                        <tr>
                          <th class="border-top-0">Nama</th>
                          <th class="border-top-0">No. Telp</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($bau->take(5) as $as)
                        <tr>
                          <td class="text-truncate">{{$as->name}}</td>
                          <td class="text-truncate">{{$as->phone}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Products sell and New Orders -->
        <!--Recent Orders & Monthly Sales -->
        <div class="row match-height">
          <div class="col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-content ">
                <div id="cost-revenue" class="height-250 position-relative"></div>
              </div>
              <div class="card-footer">
                <div class="row mt-1">
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Products</h6>
                    <h2 class="block font-weight-normal">18.6 k</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%"
                      aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Sales</h6>
                    <h2 class="block font-weight-normal">64.54 M</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%"
                      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Cost</h6>
                    <h2 class="block font-weight-normal">24.38 B</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%"
                      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <h6 class="text-muted">Total Revenue</h6>
                    <h2 class="block font-weight-normal">36.72 M</h2>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%"
                      aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body sales-growth-chart">
                  <div id="monthly-sales" class="height-250"></div>
                </div>
              </div>
              <div class="card-footer">
                <div class="chart-title mb-1 text-center">
                  <h6>Total monthly Sales.</h6>
                </div>
                <div class="chart-stats text-center">
                  <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistics <i class="ft-bar-chart"></i></a>
                  <span class="text-muted">for the last year.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/Recent Orders & Monthly Sales -->