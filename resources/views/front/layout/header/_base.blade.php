<!--begin::Header-->
<div id="kt_header" class="header bg-sisouv-header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
	<!--begin::Container-->
	<div class="container-xxl d-flex flex-grow-1 flex-stack">
		<!--begin::Header Logo-->
		<div class="d-flex align-items-center me-5">
			<!--begin::Heaeder menu toggle-->
			<div class="d-lg-none btn btn-icon btn-active-color-primary w-30px h-30px ms-n2 me-3" id="kt_header_menu_toggle">
				<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
				<span class="svg-icon svg-icon-1">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
						<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Heaeder menu toggle-->
			<!--begin::Logo-->
			<a href="?page=index">
				<img alt="Logo" src="assets/front/media/logos/logo_white1.png" class="h-50px h-lg-60px" />
			</a>
			<!--end::Logo-->
			<!--begin::Nav-->
			<div class="ms-5 ms-md-10 me-3">
				<!--begin::Toggle-->
				<button type="button" class="btn btn-nav btn-outline btn-flex btn-active-color-white align-items-center justify-content-center justify-content-md-between align-items-lg-cenrer flex-md-content-between btn-color-gray-500 px-0 ps-md-5 pe-md-4 h-30px w-30px h-md-35px w-md-175px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
					<span class="fs-7 d-none d-md-inline">Select project</span>
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
					<span class="svg-icon svg-icon-4 ms-md-4 me-0">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</button>
				<!--end::Toggle-->
				<!--begin::Menu-->
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg fw-semibold w-200px pb-3" data-kt-menu="true">
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<div class="menu-content fs-7 text-dark fw-bold px-3 py-4">Select project:</div>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator mb-3 opacity-75"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<a href="#" class="menu-link px-3">Accounting App</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<a href="#" class="menu-link px-3">HR Dashbaord</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<a href="#" class="menu-link px-3">Reporting Tool</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<a href="#" class="menu-link px-3">Warehouse CRM</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<a href="#" class="menu-link px-3">eCommerce CMS</a>
					</div>
					<!--end::Menu item-->
				</div>
				<!--end::Menu-->
			</div>
			<!--end::Nav-->
			<!--begin::Button-->
			<a href="#" class="btn btn-create btn-active-primary btn-icon w-30px h-30px w-md-35px h-md-35px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
				<span class="svg-icon svg-icon-1">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
						<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</a>
			<!--end::Button-->
		</div>
		<!--end::Header Logo-->
		<!--layout-partial:layout/header/__topbar.html-->
		@include('front.layout.header.__topbar')
	</div>
	<!--end::Container-->
	<!--begin::Container-->
	<div class="header-menu-container d-flex align-items-stretch flex-stack h-lg-50px w-100" id="kt_header_nav">
		<!--layout-partial:layout/header/__menu.html-->
		@include('front.layout.header.__menu')
	</div>
	<!--end::Container-->
</div>
<!--end::Header-->