<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
	<!--begin::Head-->
	<head>
		<base href="" />
		<title>{{config('app.name')}}</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="{{config('app.name')}}" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="front/assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Google+Sans:400,500,700|Google+Sans+Text:400,400italic,500,500italic,700,700italic|Roboto:400,400italic,500,500italic,700,700italic|Roboto+Mono:400,500,700&amp;display=swap">
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="<?= asset('front/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= asset('front/assets/plugins/custom/datatables/datatables.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?= asset('front/assets/plugins/global/plugins.bundle.css" rel="stylesheet') ?>" type="text/css" />
		<link href="<?= asset('front/assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= asset('front/assets/css/style-gbr.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-kt-app-header-stacked="true" class="page-loading-enabled page-loading app-default">
		<!--layout-partial:partials/theme-mode/_init.html-->
		@include('front.partials.theme-mode._init')
		<!--layout-partial:partials/_loader.html-->
		@include('front.partials._loader')
		<!--layout-partial:layout/_default.html-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<!--ATENÇÃO!! COLOCAR ISSO NO CSS!! ATENÇÃO!! ATENÇÃO!! ATENÇÃO!! -->
			<div class="app-page flex-column flex-column-fluid bg-secondary" id="kt_app_page">
				<!--layout-partial:layout/partials/_header.html-->
				@include('front.layout.partials._header')
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Wrapper container-->
					<div class="app-container container-xxl d-flex flex-row flex-column-fluid">
						<!--begin::Main-->
						<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								<!--begin::Content-->
								<div id="kt_app_content" class="app-content flex-column-fluid">
									@yield('content')
								</div>
								<!--end::Content-->
							</div>
							<!--end::Content wrapper-->
							<!--layout-partial:layout/partials/_footer.html-->
							@include('front.layout.partials._footer')
						</div>
						<!--end:::Main-->
					</div>
					<!--end::Wrapper container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--layout-partial:partials/_drawers.html-->
		@include('front.partials._drawers')
		<!--layout-partial:partials/_scrolltop.html-->
		@include('front.partials._scrolltop')
		<!--begin::Modals-->
		<!--layout-partial:partials/modals/_view-users.html-->
		@include('front.partials.modals._view-users')
		<!--layout-partial:partials/modals/users-search/_main.html-->
		@include('front.partials.modals.users-search._main')
		<!--layout-partial:partials/modals/_invite-friends.html-->
		@include('front.partials.modals._invite-friends')
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "front/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?= asset('front/assets/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="<?= asset('front/assets/js/scripts.bundle.js') ?>"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="<?= asset('front/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') ?>"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="<?= asset('front/assets/plugins/custom/datatables/datatables.bundle.js') ?>"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?= asset('front/assets/js/widgets.bundle.js') ?>"></script>
		<script src="<?= asset('front/assets/js/custom/widgets.js') ?>"></script>
		<script src="<?= asset('front/assets/js/custom/apps/chat/chat.js') ?>"></script>
		<script src="<?= asset('front/assets/js/custom/utilities/modals/users-search.js') ?>"></script>
		@yield('scripts')
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>