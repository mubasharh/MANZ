<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>MANS | Login </title>
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
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
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
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">{{ __('MANZ') }}</h3>
                            </div>
                            <form class="kt-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group">
                                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="row kt-login__extra">
                                    <div class="col">
                                        <label class="kt-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col kt-align-right">
                                         @if (Route::has('password.request'))
                                            <a class="kt-link kt-login__link" id="kt_login_forgot" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}

                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="kt-login__actions">
                                    <button type="submit" id="kt_login_signin_submit" class="btn btn-pill kt-login__btn-primary">Sign In</button>
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
    
<!-- end:: Page -->

        <!--end::Page Scripts -->
    <link href="{{ asset('assets/base/js/vendors.bundle.js') }}" rel="stylesheet">
     <link href="{{ asset('assets/base/js/scripts.bundle.js') }}" rel="stylesheet">
     <link href="{{ asset('assets/base/js/login.js') }}" rel="stylesheet">
    </body>

    <!-- end::Body -->
</html>