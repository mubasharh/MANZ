<!DOCTYPE html>
<!-- saved from url=(0047)https://keenthemes.com/metronic/preview/demo2/# -->
<html lang="en" class="wf-poppins-n3-active wf-poppins-n4-active wf-poppins-n5-active wf-poppins-n6-active wf-poppins-n7-active wf-active">
<!-- begin::Head -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
	<title>MANZ</title>
	<meta name="description" content="Latest updates and statistic charts"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<link rel="stylesheet" href="./Metronic _ Dashboard_files/css" media="all"><script>
		WebFont.load({
			google: {"families":["Poppins:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Fonts -->

<!--begin::Page Vendors Styles(used by this page) -->
	<link href="{{ asset('assets/base/css/fullcalendar.bundle.css') }}" rel="stylesheet">
<!--end::Page Vendors Styles -->
<!--begin::Global Theme Styles(used by all pages) -->
	<link href="{{ asset('assets/base/css/vendors.bundle.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/base/css/style.bundle.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/base/jquery-confirm/jquery-confirm.min.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/base/jquery-confirm/jquery-confirm.min.js') }}" rel="stylesheet">
     <link href="{{ asset('assets//custom/custom.js') }}" rel="stylesheet">
<!--end::Global Theme Styles -->
<link href="{{ asset('assets/base/js/jquery-3.4.1.min.js') }}" rel="stylesheet">

<!--end::Layout Skins -->
    <style type="text/css">/* Chart.js */
/*
 * DOM element rendering detection
 * https://davidwalsh.name/detect-node-insertion
 */
@keyframes chartjs-render-animation {
	from { opacity: 0.99; }
	to { opacity: 1; }
}

.chartjs-render-monitor {
	animation: chartjs-render-animation 0.001s;
}

/*
 * DOM element resizing detection
 * https://github.com/marcj/css-element-queries
 */
.chartjs-size-monitor,
.chartjs-size-monitor-expand,
.chartjs-size-monitor-shrink {
	position: absolute;
	direction: ltr;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	overflow: hidden;
	pointer-events: none;
	visibility: hidden;
	z-index: -1;
}

.chartjs-size-monitor-expand > div {
	position: absolute;
	width: 1000000px;
	height: 1000000px;
	left: 0;
	top: 0;
}

.chartjs-size-monitor-shrink > div {
	position: absolute;
	width: 200%;
	height: 200%;
	left: 0;
	top: 0;
}
</style>

<link href="{{ asset('assets/base/js/util.js') }}" rel="stylesheet">
<script type="text/javascript" charset="UTF-8" src="/common.js.download"></script>
</head>
    <!-- end::Head -->

    <!-- begin::Body -->
<body class="kt-page--loading-enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-scrolltop--on" style="">
 <!-- begin::Page loader -->
	
<!-- end::Page Loader -->        
<!-- begin:: Page -->
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
	<div class="kt-header-mobile__logo">
		<a href="#">
			<img alt="Logo" src="{{asset('images/logo-2-sm.png')}}">
		</a>
	</div>
	<div class="kt-header-mobile__toolbar">	
		<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
		<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
	</div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">

<div class="kt-header__bottom">
	<div class="kt-container ">
		<!-- begin: Header Menu -->
		<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn">
		<i class="la la-close"></i>
		</button>
		<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="opacity: 1;">
			<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
				<ul class="kt-menu__nav ">
					<li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
						<a href="{{route('home')}}" class="kt-menu__link kt-menu__toggle">
						<span class="kt-menu__link-text">Dashboards</span>
						<i class="kt-menu__ver-arrow la la-angle-right"></i>
						</a>
					</li>	
					<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open-dropdown" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
						<a href="{{route('categories')}}" class="kt-menu__link kt-menu__toggle">
							<span class="kt-menu__link-text">Catrgories</span>
							<i class="kt-menu__ver-arrow la la-angle-right"></i>
						</a>
						
					</li>
					<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open-dropdown" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
						<a href="{{route('projects')}}" class="kt-menu__link kt-menu__toggle">
							<span class="kt-menu__link-text">Projects</span>
							<i class="kt-menu__ver-arrow la la-angle-right"></i>
						</a>
						
					</li>	
					<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open-dropdown" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
						<a href="{{route('clients')}}" class="kt-menu__link kt-menu__toggle">
							<span class="kt-menu__link-text">Clients</span>
							<i class="kt-menu__ver-arrow la la-angle-right"></i>
						</a>
						
					</li>  
					 
				</ul>
			</div>
			<div class="kt-header-toolbar">
				<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
							</li>
								<li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            	</li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> 
			</div>
		</div>
	<!-- end: Header Menu -->		
	</div>
</div>
</div>