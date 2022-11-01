<!--begin::Header-->
<div id="kt_header" class="header">
	<!--begin::Header top-->
	<div class="header-top d-flex align-items-stretch flex-grow-1 h-60px h-lg-100px" data-kt-sticky="true" data-kt-sticky-name="header-topbar" data-kt-sticky-offset="{default: '100px', lg: 'false'}" data-kt-sticky-dependencies="#kt_wrapper" data-kt-sticky-class="fixed-top bg-body shadow-sm border-0">
		<!--begin::Brand container-->
		<div class="container-custom container-xxl d-flex w-100">
			<!--begin::Wrapper-->
			<div class="d-flex flex-stack align-items-stretch w-100">
				<!--begin::Brand-->
				<div class="d-flex align-items-center align-items-lg-stretch me-5">
					<!--begin::Heaeder navs toggle-->
					<button class="d-lg-none btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px ms-n2 me-2" id="kt_header_navs_toggle">
						<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
								<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
					<!--end::Heaeder navs toggle-->
					<!--begin::Logo-->
					<a href="?page=index" class="d-flex align-items-center">
						<img alt="Logo" src="assets/media/logos/logo_prefeitura.png" class="h-50px h-lg-50px" />
					</a>
					<!--end::Logo-->
				</div>
				<!--end::Brand-->
				<!--layout-partial:layout/header/__topbar.html-->
				@include('layout.header.__topbar')
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Brand container-->
	</div>
	<!--end::Header top-->
	<!--begin::Header bottom-->
	<div class="header-bottom d-lg-flex flex-column align-items-stretch w-100" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
		<!--begin::Tabs container-->
		<div class="container-custom container-xxl d-lg-flex flex-column w-100">
			<!--layout-partial:layout/header/__navs-tabs.html-->
			@include('layout.header.__navs-tabs')
		</div>
		<!--end::Tabs container-->
		<!--begin::Header panel-->
		<div class="d-flex align-items-stretch h-lg-70px" data-kt-sticky="true" data-kt-sticky-name="header-tabs" data-kt-sticky-offset="{default: 'false', lg: '300px'}" data-kt-sticky-dependencies="#kt_wrapper" data-kt-sticky-class="fixed-top bg-body shadow-sm border-0">
			<!--begin::Panel container-->
			<div class="container-custom container-xxl d-lg-flex flex-column w-100">
				<!--begin::Header navs-->
				<div class="header-navs d-lg-flex flex-column justify-content-lg-center h-100 w-100" id="kt_header_navs_wrapper">
					<!--layout-partial:layout/header/__navs.html-->
					@include('layout.header.__navs')
				</div>
				<!--end::Header navs-->
			</div>
			<!--end::Panel container-->
		</div>
		<!--end::Header panel-->
	</div>
	<!--end::Header bottom-->
</div>
<!--end::Header-->