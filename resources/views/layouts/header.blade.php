<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <title>Master Absensi</title>
  <link rel="apple-touch-icon" href="{{url('assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link rel="stylesheet" href="{{url('assets/line-awesome/css/line-awesome.min.css')}}">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/vendors.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/vendors/css/tables/datatable/datatables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/vendors/css/tables/extensions/buttons.dataTables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/vendors/css/tables/jsgrid/jsgrid-theme.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/vendors/css/tables/jsgrid/jsgrid.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/vendors/css/forms/selects/select2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/pages/login-register.min.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/app.min.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/plugins/animate/animate.min.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
  <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="index.html">
              <img class="brand-logo" alt="modern admin logo" src="{{url('assets/images/logo/logo.png')}}">
              <h3 class="brand-text">Master Absensi</h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            </li>
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
                <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
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


  <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
      
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
       @if(Auth::user()->level == 2)

        <li class=" nav-item"><a href="/home"><i class="la la-dashboard"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="/customer"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">Customer</span></a>
        </li>
        <li class=" nav-item"><a href="/reservation"><i class="la la-ticket"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">Reservation</span></a>
        </li>
        <li class=" nav-item"><a href="/rute"><i class="la la-map"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">Rute</span></a>
        </li>
        <li class=" nav-item"><a href="/trans"><i class="la la-automobile"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">Transportation</span></a>
        </li>
        <li class=" nav-item"><a href="/transtype"><i class="la la-cab"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">Transportation Type</span></a>
        </li>
      @elseif(Auth::user()->level == 1)
      <li class=" nav-item"><a href="/home"><i class="la la-dashboard"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="/customer"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">Customer</span></a>
        </li>
        <li class=" nav-item"><a href="/reservation"><i class="la la-ticket"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">Reservation</span></a>
        </li>
        @endif
        </ul>
    </div>
  </div>