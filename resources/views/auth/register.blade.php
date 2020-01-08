<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Metronic | Login Page - 2</title>
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
    <body  class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  >

                   <!-- begin::Page loader -->
    
<!-- end::Page Loader -->        
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
                <div class="">
                    <div class="kt-login__head">
                        <h3 class="kt-login__title">{{ __('Sign Up') }}</h3>
                        <div class="kt-login__desc">{{__('Enter your details to create your account:')}}</div>
                    </div>
                    <form class="kt-login__form kt-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="input-group">
                            <input id="name" type="text" class="form-control m-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input id="email" type="email" class="form-control m-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control m-input  @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group">
                             <input id="password-confirm" type="password" class="form-control m-input" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                        </div>
                        <div class="kt-login__actions">
                            <button  type="submit" id="kt_login_signup_submit" class="btn btn-pill kt-login__btn-primary">{{ __('Register') }}</button>&nbsp;&nbsp;
                            <a href="{{ route('login') }}" id="kt_login_signup_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</a>
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