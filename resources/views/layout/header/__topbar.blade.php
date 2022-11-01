<!--begin::Topbar-->
<div class="topbar d-flex align-items-center flex-shrink-0">
	<!--begin:Text-->
	<h1 class="d-flex flex-column text-dark fw-bold my-1 text-end">
		<span class="text-white text-uppercase fs-6">Ouvidoria Digital</span>
		<small class="text-gray-400 fs-7 fw-normal pt-0">Controladoria e Ouvidoria Geral</small>
	</h1>
	<!--end::Text-->
	<!--begin::Search-->
	<div class="d-flex align-items-stretch topbar-search ms-2">
		<!--layout-partial:partials/search/_inline.html-->
	</div>
	<!--end::Search-->
	<!--begin::Activities-->
	<div class="d-flex align-items-center ms-2">
		<!--begin::Drawer toggle-->
		<div class="btn btn-icon btn-custom" id="kt_activities_toggle">
			<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
			<span class="svg-icon svg-icon-1">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
					<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
					<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
					<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Drawer toggle-->
	</div>
	<!--end::Activities-->
	<!--begin::Theme mode-->
	<div class="d-flex align-items-center ms-2">
		<!--layout-partial:partials/theme-mode/_main.html-->
		@include('partials.theme-mode._main')
	</div>
	<!--end::Theme mode-->
	<!--begin::User-->
	<div class="d-flex align-items-center ms-2" id="kt_header_user_menu_toggle">
		<!--begin::Menu- wrapper-->
		<!--begin::User icon(remove this button to use user avatar as menu toggle)-->
		<div class="btn btn-icon btn-custom" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
			<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
			<span class="svg-icon svg-icon-1">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor" />
					<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::User icon-->
		<!--layout-partial:partials/menus/_user-account-menu.html-->
		<!--end::Menu wrapper-->
	</div>
	<!--end::User -->
	<!--begin::Chat-->
	<div class="d-flex align-items-center ms-2">
		<!--begin::Drawer wrapper-->
		<div class="btn btn-icon btn-custom lh-1 position-relative" id="kt_drawer_chat_toggle">
			<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
			<span class="svg-icon svg-icon-1">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
					<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
					<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
			<!--begin::Bullet-->
			<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
			<!--end::Bullet-->
		</div>
		<!--end::Drawer wrapper-->
	</div>
	<!--end::Chat-->
	<!--begin::Heaeder menu toggle-->
	<!--end::Heaeder menu toggle-->
</div>
<!--end::Topbar-->