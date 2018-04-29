<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Master Tiket</title>
  <link rel="apple-touch-icon" href="{{url('assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/vendors.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/vendors/css/charts/morris.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/vendors/css/charts/chartist.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/app.min.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/core/menu/menu-types/horizontal-menu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/line-awesome/css/line-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/fonts/simple-line-icons/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/pages/users.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/pages/dashboard-ecommerce.min.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('css/style-horizontal.css')}}">
  <!-- END Custom CSS-->
</head>
<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"
data-open="click" data-menu="horizontal-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="index-2.html">
              <img class="brand-logo" alt="modern admin logo" src="{{url('assets/images/logo/logo.png')}}">
              <h3 class="brand-text">Master Tiket</h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container container center-layout">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700">{{Auth::user()->name}}</span>
                </span>
                <span class="avatar avatar-online">
                  <img src="{{url('assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                <a
                class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="ft-power"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
  role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
        @if(Auth::user()->level == 2)
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item">
          <a class=" nav-link" href="/home"><i class="la la-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="/customer"><i class="la la-columns"></i><span>Customer</span></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="/reservation"><i class="la la-folder-open"></i><span>Reservation</span></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="/rute"><i class="la la-folder-open"></i><span>Rute</span></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="/trans"><i class="la la-folder-open"></i><span>Transportation</span></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="/transtype"><i class="la la-folder-open"></i><span>Transportation Type</span></a>
        </li>
      </ul>
        @elseif(Auth::user()->level == 1)
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item">
          <a class=" nav-link" href="/home"><i class="la la-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="/customer"><i class="la la-columns"></i><span>Customer</span></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="/reservation"><i class="la la-folder-open"></i><span>Reservation</span></a>
        </li>
      </ul>
      @endif
    </div>
  </div>
  <div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        @if(Auth::user()->level == 2)
        @include('layouts.stats')
        @elseif(Auth::user()->level == 1)
        <div></div>
        @endif
        <!-- Products sell and New Orders -->
        <div class="row match-height mt-2">
          <div id="recent-sales" class="col-12 col-md-8">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recent Reservation</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                      href="/reservation" target="_blank">View all</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content mt-1">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">No.</th>
                        <th class="border-top-0">Code</th>
                        <th class="border-top-0">Customer Name</th>
                        <th class="border-top-0">Tujuan</th>
                        <th class="border-top-0">Tanggal Berangkat</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($res->take(5) as $as)
                      <tr>
                        <td class="text-truncate">{{ $loop->iteration }}</td>
                        <td class="text-truncate">{{$as->reservation_code}}</td>
                        <td class="text-truncate">{{$as->customer['name']}}</td>
                        <td class="text-truncate">{{$as->reservation_at}}</td>
                        <td class="text-truncate">{{$as->reservation_date}}</td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-12">
              <div class="card">
              <div class="text-center">
                <div class="card-body">
                  <img src="{{url('assets/images/portrait/medium/avatar-m-4.png')}}" class="rounded-circle  height-150"
                  alt="Card image">
                </div>
                <div class="card-body">
                  <h4 class="card-title">{{Auth::user()->name}}</h4>
                  <h6 class="card-subtitle text-muted">@if(Auth::user()->level == 2)
                                                        Admin
                                                        @elseif(Auth::user()->level == 1)
                                                        Kasir
                                                        @endif</h6>
                </div>
                <div class="text-center">
                  <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                    <span class="la la-facebook"></span>
                  </a>
                  <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                    <span class="la la-twitter"></span>
                  </a>
                  <a href="#" class="btn btn-social-icon mb-1 btn-outline-linkedin">
                    <span class="la la-linkedin font-medium-4"></span>
                  </a>
                </div>
              </div>
            </div>
            </div>
        </div>
        @if(Auth::user()->level == 2)
        @include('layouts.dashboard')
        @elseif(Auth::user()->level == 1)
        <div></div>
        @endif
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <footer class="footer footer-transparent footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="#"
        target="_blank">Master Ticket </a>, All rights reserved. </span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="{{url('assets/vendors/js/vendors-horizontal.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="{{url('assets/vendors/js/ui/jquery.sticky.js')}}"></script>
  <script src="{{url('assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"
  type="text/javascript"></script>
  <script src="{{url('assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{url('assets/js/core/app-menu.min.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/js/core/app.min.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/js/scripts/customizer.min.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{url('assets/js/scripts/pages/dashboard-ecommerce.min.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>

</html>