<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--begin::Head-->
	<head>
		<base href="" />
		<title>{{ config('app.name') }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/front/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/front/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/front/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/front/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/front/css/customize.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="page-loading-enabled page-loading header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--layout-partial:partials/theme-mode/_init.html-->
		@include('front.partials.theme-mode._init')
		<!--layout-partial:partials/_loader.html-->
		@include('front.partials._loader')
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--layout-partial:layout/header/_base.html-->
					@include('front.layout.header._base')
					<!--layout-partial:layout/_toolbar.html-->
					@include('front.layout._toolbar')
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							@yield('content')
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
					<!--layout-partial:layout/_footer.html-->
					@include('front.layout._footer')
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--layout-partial:partials/_drawers.html-->
		@include('front.partials._drawers')
		<!--end::Main-->
		<!--layout-partial:partials/_scrolltop.html-->
		@include('front.partials._scrolltop')
		<!--begin::Modals-->
		<!--layout-partial:partials/modals/create-project/_main.html-->
		<!--layout-partial:partials/modals/_upgrade-plan.html-->
		<!--layout-partial:partials/modals/create-campaign/_main.html-->
		<!--layout-partial:partials/modals/create-app/_main.html-->
		<!--layout-partial:partials/modals/users-search/_main.html-->
		<!--layout-partial:partials/modals/_invite-friends.html-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/front/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/front/plugins/global/plugins.bundle.js"></script>
		<script src="assets/front/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/front/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
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
		<script src="assets/front/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/front/js/widgets.bundle.js"></script>
		<script src="assets/front/js/custom/widgets.js"></script>
		<script src="assets/front/js/custom/apps/chat/chat.js"></script>
		<script src="assets/front/js/custom/utilities/modals/create-project/type.js"></script>
		<script src="assets/front/js/custom/utilities/modals/create-project/budget.js"></script>
		<script src="assets/front/js/custom/utilities/modals/create-project/settings.js"></script>
		<script src="assets/front/js/custom/utilities/modals/create-project/team.js"></script>
		<script src="assets/front/js/custom/utilities/modals/create-project/targets.js"></script>
		<script src="assets/front/js/custom/utilities/modals/create-project/files.js"></script>
		<script src="assets/front/js/custom/utilities/modals/create-project/complete.js"></script>
		<script src="assets/front/js/custom/utilities/modals/create-project/main.js"></script>
		<script src="assets/front/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/front/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="assets/front/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/front/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		@yield('scripts')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>