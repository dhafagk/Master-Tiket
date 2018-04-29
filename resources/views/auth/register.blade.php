<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <title>Login</title>

  <link rel="apple-touch-icon" href="{{url('assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="{{url('assets/fonts/line-awesome/1.1/css/line-awesome.min.html')}}"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/vendors/css/forms/icheck/icheck.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/vendors/css/forms/icheck/custom.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/app.min.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/pages/login-register.min.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img src="{{url('assets/images/logo/logo-dark.png')}}" alt="branding logo">
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Create Account</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple" role="form" method="POST" action="{{ route('register') }}">
{{ csrf_field() }}
                      <fieldset class="form-group position-relative has-icon-left mb-1{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control form-control-lg input-lg" id="user-name" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        <div class="form-control-position">
                        </div>
                      </fieldset>

                      <fieldset class="form-group position-relative has-icon-left mb-1{{ $errors->has('username') ? ' has-error' : '' }}">
                        <input type="text" class="form-control form-control-lg input-lg" id="user-name" placeholder="User Name"  name="username" value="{{ old('username') }}" required>
                        @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                        <div class="form-control-position">
                        </div>
                      </fieldset>

                      <fieldset class="form-group position-relative has-icon-left{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control form-control-lg input-lg" name="password" id="user-password"
                        placeholder="Enter Password" required>
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        <div class="form-control-position">
                        </div>
                      </fieldset>

                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control form-control-lg input-lg" name="password_confirmation" id="confirm-password"
                        placeholder="Confirm Password" required>
                        <div class="form-control-position">
                        </div>
                      </fieldset>

                      <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
                    </form>
                  </div>
                  <p class="text-center">Sudah punya akun admin ? <a href="{{ route('login') }}" class="card-link">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="{{url('assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{url('assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{url('assets/js/core/app-menu.min.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/js/core/app.min.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{url('assets/js/scripts/forms/form-login-register.min.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>

</html>