<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Forget Password</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
      });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
       <link href="{{ asset('assets/base/css/vendors.bundle.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/base/css/style.bundle.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/base/css/login-2.css') }}" rel="stylesheet">

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  >

<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
        <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url( {{ asset('images/bg-1.jpg')}} );">
        <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
            <div class="kt-login__container">
                <div class="kt-login__logo">
                    <a href="#">
                        <img src="{{ asset('images/logo-1.png')}}">   
                    </a>
                </div>
                <div class="">
                    <div class="kt-login__head">
                        <h3 class="kt-login__title">Forgotten Password</h3>
                        <div class="kt-login__desc">Enter your email to reset your password</div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="kt-form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="input-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                        </div>
                        <div class="kt-login__actions">
                            <button type="submit" class="btn btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                            <a  href="{{ route('login') }}" id="kt_login_forgot_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
                <div class="kt-login__account">
                    <span class="kt-login__account-msg">
                        Don't have an account yet ?
                    </span>&nbsp;&nbsp;
                    <a href="{{ route('register')}}" id="kt_login_signup" class="kt-link kt-link--light kt-login__account-link">{{ __('Register') }}</a>
                </div>
            </div>  
        </div>
    </div>
</div>  
    </div>

        <!--end::Page Scripts -->
    <link href="{{ asset('assets/base/js/vendors.bundle.js') }}" rel="stylesheet">
     <link href="{{ asset('assets/base/js/scripts.bundle.js') }}" rel="stylesheet">
    </body>

    <!-- end::Body -->
</html>