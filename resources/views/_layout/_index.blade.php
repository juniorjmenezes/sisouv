<!DOCTYPE html>
<html lang="pt-br">
	<!--begin::Head-->
	<head><base href="../"/>
		<title>SISOUV - Ouvidoria Digital</title>
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
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-tabs-enabled header-menu-enabled" style="background: rgb(95,191,134);
	background: radial-gradient(circle, rgba(95,191,134,1) 0%, rgba(36,153,84,1) 35%, rgba(13,91,47,1) 100%);">
		<!--begin::Theme mode setup on page load-->
		<script>
		var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }
		</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					@include('layout.partials.header')
					<!--end::Header-->
					<!--begin::Container-->
					<div id="kt_content_container" class="container-custom container-xxl d-flex flex-column-fluid">
						<!--begin::Content-->
						<div class="content d-flex flex-row flex-row-fluid" id="kt_content">
							<!--begin::Main-->
							<div class="d-flex flex-column flex-row-fluid">
								<!--begin::Toolbar-->
								@include('layout.partials.toolbar')
								<!--end::Toolbar-->
								<!--begin::Post-->
								<div class="flex-column-fluid">
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-12 mb-5 mb-xl-10">
											<!--begin::Chart widget 32-->
											<div class="mb-10">
												<!--begin::Tabs-->
												<ul class="nav row mb-10" role="tablist">
													<li class="nav-item col-12 col-lg mb-5 mb-lg-0" role="presentation">
														<a class="nav-link btn btn-flex btn-color-gray-800 btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px" data-bs-toggle="tab" href="#kt_general_widget_1_1" aria-selected="false" role="tab" tabindex="-1">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
															<span class="svg-icon svg-icon-3x mb-5 mx-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"></path>
																	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
															<span class="text-uppercase fs-6 fw-bold">Denúncia</span>
														</a>
													</li>
													<li class="nav-item col-12 col-lg mb-5 mb-lg-0" role="presentation">
														<a class="nav-link btn btn-flex btn-color-gray-800 btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px" data-bs-toggle="tab" href="#kt_general_widget_1_1" aria-selected="false" role="tab" tabindex="-1">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
															<span class="svg-icon svg-icon-3x mb-5 mx-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"></path>
																	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
															<span class="text-uppercase fs-6 fw-bold">Elogio</span>
														</a>
													</li>
													<li class="nav-item col-12 col-lg mb-5 mb-lg-0" role="presentation">
														<a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px" data-bs-toggle="tab" href="#kt_general_widget_1_2" aria-selected="false" role="tab" tabindex="-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
															<span class="svg-icon svg-icon-3x mb-5 mx-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="currentColor"></path>
																	<path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="currentColor"></path>
																	<path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="currentColor"></path>
																	<path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
															<span class="fs-6 fw-bold">Main 
															<br>Categories</span>
														</a>
													</li>
													<li class="nav-item col-12 col-lg mb-5 mb-lg-0" role="presentation">
														<a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px" data-bs-toggle="tab" href="#kt_general_widget_1_3" aria-selected="false" role="tab" tabindex="-1">
															<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
															<span class="svg-icon svg-icon-3x mb-5 mx-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor"></path>
																	<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
															<span class="fs-6 fw-bold">Order 
															<br>Management</span>
														</a>
													</li>
													<li class="nav-item col-12 col-lg mb-5 mb-lg-0" role="presentation">
														<a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px" data-bs-toggle="tab" href="#kt_general_widget_1_4" aria-selected="false" role="tab" tabindex="-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
															<span class="svg-icon svg-icon-3x mb-5 mx-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor"></rect>
																	<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor"></rect>
																	<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor"></rect>
																	<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->
															<span class="fs-6 fw-bold">Sales 
															<br>Statistics</span>
														</a>
													</li>
													<li class="nav-item col-12 col-lg mb-5 mb-lg-0" role="presentation">
														<a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active" data-bs-toggle="tab" href="#kt_general_widget_1_5" aria-selected="true" role="tab">
															<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
															<span class="svg-icon svg-icon-3x mb-5 mx-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
																	<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
															<span class="fs-6 fw-bold">Access 
															<br>Control</span>
														</a>
													</li>
												</ul>
												<!--begin::Tab content-->
												<div class="tab-content">
													<div class="tab-pane fade" id="kt_general_widget_1_1" role="tabpanel">
														<!--begin::Tables Widget 2-->
														<div class="card">
															<!--begin::Header-->
															<div class="card-header border-0 pt-5">
																<h3 class="card-title align-items-start flex-column">
																	<span class="card-label fw-bold fs-3 mb-1">Latest Arrivals</span>
																	<span class="text-muted mt-1 fw-semibold fs-7">More than 100 new products</span>
																</h3>
																<div class="card-toolbar">
																	<!--begin::Menu-->
																	<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
																		<span class="svg-icon svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
																					<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																					<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																					<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</button>
																	<!--begin::Menu 1-->
																	<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_635845c7f3ff3">
																		<!--begin::Header-->
																		<div class="px-7 py-5">
																			<div class="fs-5 text-dark fw-bold">Filter Options</div>
																		</div>
																		<!--end::Header-->
																		<!--begin::Menu separator-->
																		<div class="separator border-gray-200"></div>
																		<!--end::Menu separator-->
																		<!--begin::Form-->
																		<div class="px-7 py-5">
																			<!--begin::Input group-->
																			<div class="mb-10">
																				<!--begin::Label-->
																				<label class="form-label fw-semibold">Status:</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<div>
																					<select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_635845c7f3ff3" data-allow-clear="true" data-select2-id="select2-data-7-9p6o" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																						<option data-select2-id="select2-data-9-jslx"></option>
																						<option value="1">Approved</option>
																						<option value="2">Pending</option>
																						<option value="2">In Process</option>
																						<option value="2">Rejected</option>
																					</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-isyr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-xer8-container" aria-controls="select2-xer8-container"><span class="select2-selection__rendered" id="select2-xer8-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																				</div>
																				<!--end::Input-->
																			</div>
																			<!--end::Input group-->
																			<!--begin::Input group-->
																			<div class="mb-10">
																				<!--begin::Label-->
																				<label class="form-label fw-semibold">Member Type:</label>
																				<!--end::Label-->
																				<!--begin::Options-->
																				<div class="d-flex">
																					<!--begin::Options-->
																					<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																						<input class="form-check-input" type="checkbox" value="1">
																						<span class="form-check-label">Author</span>
																					</label>
																					<!--end::Options-->
																					<!--begin::Options-->
																					<label class="form-check form-check-sm form-check-custom form-check-solid">
																						<input class="form-check-input" type="checkbox" value="2" checked="checked">
																						<span class="form-check-label">Customer</span>
																					</label>
																					<!--end::Options-->
																				</div>
																				<!--end::Options-->
																			</div>
																			<!--end::Input group-->
																			<!--begin::Input group-->
																			<div class="mb-10">
																				<!--begin::Label-->
																				<label class="form-label fw-semibold">Notifications:</label>
																				<!--end::Label-->
																				<!--begin::Switch-->
																				<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																					<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																					<label class="form-check-label">Enabled</label>
																				</div>
																				<!--end::Switch-->
																			</div>
																			<!--end::Input group-->
																			<!--begin::Actions-->
																			<div class="d-flex justify-content-end">
																				<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																				<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																			</div>
																			<!--end::Actions-->
																		</div>
																		<!--end::Form-->
																	</div>
																	<!--end::Menu 1-->
																	<!--end::Menu-->
																</div>
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div class="card-body py-3">
																<!--begin::Table container-->
																<div class="table-responsive">
																	<!--begin::Table-->
																	<table class="table align-middle gs-0 gy-5">
																		<!--begin::Table head-->
																		<thead>
																			<tr>
																				<th class="p-0 w-50px"></th>
																				<th class="p-0 min-w-150px"></th>
																				<th class="p-0 min-w-150px"></th>
																				<th class="p-0 min-w-125px"></th>
																				<th class="p-0 min-w-40px"></th>
																			</tr>
																		</thead>
																		<!--end::Table head-->
																		<!--begin::Table body-->
																		<tbody>
																			<tr>
																				<td>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label">
																							<img src="/metronic8/demo18/assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
																						</span>
																					</div>
																				</td>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Top Authors</a>
																					<span class="text-muted fw-semibold d-block fs-7">Successful Fellas</span>
																				</td>
																				<td class="text-end">
																					<span class="badge badge-light-danger fw-semibold me-1">Angular</span>
																					<span class="badge badge-light-info fw-semibold me-1">PHP</span>
																				</td>
																				<td class="text-end">
																					<span class="text-muted fw-bold">4600 Users</span>
																				</td>
																				<td class="text-end">
																					<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																						<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																								<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</a>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label">
																							<img src="/metronic8/demo18/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
																						</span>
																					</div>
																				</td>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
																					<span class="text-muted fw-semibold d-block fs-7">Most Successful</span>
																				</td>
																				<td class="text-end">
																					<span class="badge badge-light-danger fw-semibold me-1">HTML</span>
																					<span class="badge badge-light-info fw-semibold me-1">CSS</span>
																				</td>
																				<td class="text-end">
																					<span class="text-muted fw-bold">7200 Users</span>
																				</td>
																				<td class="text-end">
																					<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																						<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																								<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</a>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label">
																							<img src="/metronic8/demo18/assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
																						</span>
																					</div>
																				</td>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">New Users</a>
																					<span class="text-muted fw-semibold d-block fs-7">Awesome Users</span>
																				</td>
																				<td class="text-end">
																					<span class="badge badge-light-danger fw-semibold me-1">React</span>
																					<span class="badge badge-light-info fw-semibold me-1">SASS</span>
																				</td>
																				<td class="text-end">
																					<span class="text-muted fw-bold">890 Users</span>
																				</td>
																				<td class="text-end">
																					<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																						<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																								<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</a>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label">
																							<img src="/metronic8/demo18/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
																						</span>
																					</div>
																				</td>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
																					<span class="text-muted fw-semibold d-block fs-7">Best Customers</span>
																				</td>
																				<td class="text-end">
																					<span class="badge badge-light-danger fw-semibold me-1">Java</span>
																					<span class="badge badge-light-info fw-semibold me-1">PHP</span>
																				</td>
																				<td class="text-end">
																					<span class="text-muted fw-bold">6370 Users</span>
																				</td>
																				<td class="text-end">
																					<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																						<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																								<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</a>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label">
																							<img src="/metronic8/demo18/assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">
																						</span>
																					</div>
																				</td>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																					<span class="text-muted fw-semibold d-block fs-7">Amazing Templates</span>
																				</td>
																				<td class="text-end">
																					<span class="badge badge-light-danger fw-semibold me-1">Python</span>
																					<span class="badge badge-light-info fw-semibold me-1">MySQL</span>
																				</td>
																				<td class="text-end">
																					<span class="text-muted fw-bold">354 Users</span>
																				</td>
																				<td class="text-end">
																					<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																						<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																								<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</a>
																				</td>
																			</tr>
																		</tbody>
																		<!--end::Table body-->
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Table container-->
															</div>
															<!--end::Body-->
														</div>
														<!--end::Tables Widget 2-->
													</div>
													<div class="tab-pane fade" id="kt_general_widget_1_2" role="tabpanel">
														<!--begin::Tables Widget 3-->
														<div class="card">
															<!--begin::Header-->
															<div class="card-header border-0 pt-5">
																<h3 class="card-title align-items-start flex-column">
																	<span class="card-label fw-bold fs-3 mb-1">Files</span>
																	<span class="text-muted mt-1 fw-semibold fs-7">Over 100 pending files</span>
																</h3>
																<div class="card-toolbar">
																	<!--begin::Menu-->
																	<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
																		<span class="svg-icon svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
																					<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																					<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																					<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</button>
																	<!--begin::Menu 3-->
																	<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
																		<!--begin::Heading-->
																		<div class="menu-item px-3">
																			<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
																		</div>
																		<!--end::Heading-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Create Invoice</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link flex-stack px-3">Create Payment 
																			<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1"></i></a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Generate Bill</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																			<a href="#" class="menu-link px-3">
																				<span class="menu-title">Subscription</span>
																				<span class="menu-arrow"></span>
																			</a>
																			<!--begin::Menu sub-->
																			<div class="menu-sub menu-sub-dropdown w-175px py-4">
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3">Plans</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3">Billing</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3">Statements</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu separator-->
																				<div class="separator my-2"></div>
																				<!--end::Menu separator-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<div class="menu-content px-3">
																						<!--begin::Switch-->
																						<label class="form-check form-switch form-check-custom form-check-solid">
																							<!--begin::Input-->
																							<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
																							<!--end::Input-->
																							<!--end::Label-->
																							<span class="form-check-label text-muted fs-6">Recuring</span>
																							<!--end::Label-->
																						</label>
																						<!--end::Switch-->
																					</div>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu sub-->
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3 my-1">
																			<a href="#" class="menu-link px-3">Settings</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu 3-->
																	<!--end::Menu-->
																</div>
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div class="card-body py-3">
																<!--begin::Table container-->
																<div class="table-responsive">
																	<!--begin::Table-->
																	<table class="table align-middle gs-0 gy-3">
																		<!--begin::Table head-->
																		<thead>
																			<tr>
																				<th class="p-0 w-50px"></th>
																				<th class="p-0 min-w-150px"></th>
																				<th class="p-0 min-w-140px"></th>
																				<th class="p-0 min-w-120px"></th>
																				<th class="p-0 min-w-40px"></th>
																			</tr>
																		</thead>
																		<!--end::Table head-->
																		<!--begin::Table body-->
																		<tbody>
																			<tr>
																				<td>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label bg-light-success">
																							<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
																							<span class="svg-icon svg-icon-2x svg-icon-success">
																								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																									<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor"></path>
																									<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor"></path>
																									<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor"></path>
																								</svg>
																							</span>
																							<!--end::Svg Icon-->
																						</span>
																					</div>
																				</td>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Top Authors</a>
																				</td>
																				<td class="text-end text-muted fw-bold">ReactJs, HTML</td>
																				<td class="text-end text-muted fw-bold">4600 Users</td>
																				<td class="text-end text-dark fw-bold fs-6 pe-0">5.4MB</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label bg-light-danger">
																							<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																							<span class="svg-icon svg-icon-2x svg-icon-danger">
																								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																									<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
																									<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
																									<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
																									<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
																								</svg>
																							</span>
																							<!--end::Svg Icon-->
																						</span>
																					</div>
																				</td>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
																				</td>
																				<td class="text-end text-muted fw-bold">Python, MySQL</td>
																				<td class="text-end text-muted fw-bold">7200 Users</td>
																				<td class="text-end text-dark fw-bold fs-6 pe-0">2.8MB</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label bg-light-info">
																							<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																							<span class="svg-icon svg-icon-2x svg-icon-info">
																								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																									<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor"></path>
																									<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor"></path>
																								</svg>
																							</span>
																							<!--end::Svg Icon-->
																						</span>
																					</div>
																				</td>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">New Users</a>
																				</td>
																				<td class="text-end text-muted fw-bold">Laravel, Metronic</td>
																				<td class="text-end text-muted fw-bold">890 Users</td>
																				<td class="text-end text-dark fw-bold fs-6 pe-0">1.5MB</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label bg-light-warning">
																							<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																							<span class="svg-icon svg-icon-2x svg-icon-warning">
																								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																									<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"></path>
																									<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"></path>
																								</svg>
																							</span>
																							<!--end::Svg Icon-->
																						</span>
																					</div>
																				</td>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
																				</td>
																				<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																				<td class="text-end text-muted fw-bold">4600 Users</td>
																				<td class="text-end text-dark fw-bold fs-6 pe-0">5.4MB</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label bg-light-primary">
																							<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																							<span class="svg-icon svg-icon-2x svg-icon-primary">
																								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																									<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor"></path>
																									<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor"></path>
																								</svg>
																							</span>
																							<!--end::Svg Icon-->
																						</span>
																					</div>
																				</td>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
																				</td>
																				<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																				<td class="text-end text-muted fw-bold">354 Users</td>
																				<td class="text-end text-dark fw-bold fs-6 pe-0">500KB</td>
																			</tr>
																		</tbody>
																		<!--end::Table body-->
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Table container-->
															</div>
															<!--begin::Body-->
														</div>
														<!--end::Tables Widget 3-->
													</div>
													<div class="tab-pane fade" id="kt_general_widget_1_3" role="tabpanel">
														<!--begin::Tables Widget 5-->
														<div class="card">
															<!--begin::Header-->
															<div class="card-header border-0 pt-5">
																<h3 class="card-title align-items-start flex-column">
																	<span class="card-label fw-bold fs-3 mb-1">Latest Products</span>
																	<span class="text-muted mt-1 fw-semibold fs-7">More than 400 new products</span>
																</h3>
																<div class="card-toolbar">
																	<ul class="nav" role="tablist">
																		<li class="nav-item" role="presentation">
																			<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1 active" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1" aria-selected="true" role="tab">Month</a>
																		</li>
																		<li class="nav-item" role="presentation">
																			<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2" aria-selected="false" tabindex="-1" role="tab">Week</a>
																		</li>
																		<li class="nav-item" role="presentation">
																			<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3" aria-selected="false" tabindex="-1" role="tab">Day</a>
																		</li>
																	</ul>
																</div>
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div class="card-body py-3">
																<div class="tab-content">
																	<!--begin::Tap pane-->
																	<div class="tab-pane fade show active" id="kt_table_widget_5_tab_1" role="tabpanel">
																		<!--begin::Table container-->
																		<div class="table-responsive">
																			<!--begin::Table-->
																			<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																				<!--begin::Table head-->
																				<thead>
																					<tr class="border-0">
																						<th class="p-0 w-50px"></th>
																						<th class="p-0 min-w-150px"></th>
																						<th class="p-0 min-w-140px"></th>
																						<th class="p-0 min-w-110px"></th>
																						<th class="p-0 min-w-50px"></th>
																					</tr>
																				</thead>
																				<!--end::Table head-->
																				<!--begin::Table body-->
																				<tbody>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
																							<span class="text-muted fw-semibold d-block">Movie Creator</span>
																						</td>
																						<td class="text-end text-muted fw-bold">React, HTML</td>
																						<td class="text-end">
																							<span class="badge badge-light-success">Approved</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
																							<span class="text-muted fw-semibold d-block">Most Successful</span>
																						</td>
																						<td class="text-end text-muted fw-bold">Python, MySQL</td>
																						<td class="text-end">
																							<span class="badge badge-light-warning">In Progress</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">New Users</a>
																							<span class="text-muted fw-semibold d-block">Awesome Users</span>
																						</td>
																						<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
																						<td class="text-end">
																							<span class="badge badge-light-primary">Success</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
																							<span class="text-muted fw-semibold d-block">Movie Creator</span>
																						</td>
																						<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																						<td class="text-end">
																							<span class="badge badge-light-danger">Rejected</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																							<span class="text-muted fw-semibold d-block">Best Customers</span>
																						</td>
																						<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																						<td class="text-end">
																							<span class="badge badge-light-warning">In Progress</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																				</tbody>
																				<!--end::Table body-->
																			</table>
																		</div>
																		<!--end::Table-->
																	</div>
																	<!--end::Tap pane-->
																	<!--begin::Tap pane-->
																	<div class="tab-pane fade" id="kt_table_widget_5_tab_2" role="tabpanel">
																		<!--begin::Table container-->
																		<div class="table-responsive">
																			<!--begin::Table-->
																			<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																				<!--begin::Table head-->
																				<thead>
																					<tr class="border-0">
																						<th class="p-0 w-50px"></th>
																						<th class="p-0 min-w-150px"></th>
																						<th class="p-0 min-w-140px"></th>
																						<th class="p-0 min-w-110px"></th>
																						<th class="p-0 min-w-50px"></th>
																					</tr>
																				</thead>
																				<!--end::Table head-->
																				<!--begin::Table body-->
																				<tbody>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
																							<span class="text-muted fw-semibold d-block">Movie Creator</span>
																						</td>
																						<td class="text-end text-muted fw-bold">React, HTML</td>
																						<td class="text-end">
																							<span class="badge badge-light-success">Approved</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
																							<span class="text-muted fw-semibold d-block">Most Successful</span>
																						</td>
																						<td class="text-end text-muted fw-bold">Python, MySQL</td>
																						<td class="text-end">
																							<span class="badge badge-light-warning">In Progress</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
																							<span class="text-muted fw-semibold d-block">Movie Creator</span>
																						</td>
																						<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																						<td class="text-end">
																							<span class="badge badge-light-danger">Rejected</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																				</tbody>
																				<!--end::Table body-->
																			</table>
																		</div>
																		<!--end::Table-->
																	</div>
																	<!--end::Tap pane-->
																	<!--begin::Tap pane-->
																	<div class="tab-pane fade" id="kt_table_widget_5_tab_3" role="tabpanel">
																		<!--begin::Table container-->
																		<div class="table-responsive">
																			<!--begin::Table-->
																			<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																				<!--begin::Table head-->
																				<thead>
																					<tr class="border-0">
																						<th class="p-0 w-50px"></th>
																						<th class="p-0 min-w-150px"></th>
																						<th class="p-0 min-w-140px"></th>
																						<th class="p-0 min-w-110px"></th>
																						<th class="p-0 min-w-50px"></th>
																					</tr>
																				</thead>
																				<!--end::Table head-->
																				<!--begin::Table body-->
																				<tbody>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																							<span class="text-muted fw-semibold d-block">Best Customers</span>
																						</td>
																						<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																						<td class="text-end">
																							<span class="badge badge-light-warning">In Progress</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
																							<span class="text-muted fw-semibold d-block">Movie Creator</span>
																						</td>
																						<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																						<td class="text-end">
																							<span class="badge badge-light-danger">Rejected</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">New Users</a>
																							<span class="text-muted fw-semibold d-block">Awesome Users</span>
																						</td>
																						<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
																						<td class="text-end">
																							<span class="badge badge-light-primary">Success</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-45px me-2">
																								<span class="symbol-label">
																									<img src="/metronic8/demo18/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
																								</span>
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
																							<span class="text-muted fw-semibold d-block">Most Successful</span>
																						</td>
																						<td class="text-end text-muted fw-bold">Python, MySQL</td>
																						<td class="text-end">
																							<span class="badge badge-light-warning">In Progress</span>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																								<span class="svg-icon svg-icon-2">
																									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</a>
																						</td>
																					</tr>
																				</tbody>
																				<!--end::Table body-->
																			</table>
																		</div>
																		<!--end::Table-->
																	</div>
																	<!--end::Tap pane-->
																</div>
															</div>
															<!--end::Body-->
														</div>
														<!--end::Tables Widget 5-->
													</div>
													<div class="tab-pane fade" id="kt_general_widget_1_4" role="tabpanel">
														<!--begin::Tables Widget 4-->
														<div class="card">
															<!--begin::Header-->
															<div class="card-header border-0 pt-5">
																<h3 class="card-title align-items-start flex-column">
																	<span class="card-label fw-bold fs-3 mb-1">New Members</span>
																	<span class="text-muted mt-1 fw-semibold fs-7">More than 400 new members</span>
																</h3>
																<div class="card-toolbar">
																	<ul class="nav" role="tablist">
																		<li class="nav-item" role="presentation">
																			<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_4_tab_1" aria-selected="true" role="tab">Month</a>
																		</li>
																		<li class="nav-item" role="presentation">
																			<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_4_tab_2" aria-selected="false" tabindex="-1" role="tab">Week</a>
																		</li>
																		<li class="nav-item" role="presentation">
																			<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4" data-bs-toggle="tab" href="#kt_table_widget_4_tab_3" aria-selected="false" tabindex="-1" role="tab">Day</a>
																		</li>
																	</ul>
																</div>
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div class="card-body py-3">
																<div class="tab-content">
																	<!--begin::Tap pane-->
																	<div class="tab-pane fade show active" id="kt_table_widget_4_tab_1" role="tabpanel">
																		<!--begin::Table container-->
																		<div class="table-responsive">
																			<!--begin::Table-->
																			<table class="table align-middle gs-0 gy-3">
																				<!--begin::Table head-->
																				<thead>
																					<tr>
																						<th class="p-0 w-50px"></th>
																						<th class="p-0 min-w-150px"></th>
																						<th class="p-0 min-w-140px"></th>
																						<th class="p-0 min-w-120px"></th>
																					</tr>
																				</thead>
																				<!--end::Table head-->
																				<!--begin::Table body-->
																				<tbody>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/avatars/300-14.jpg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
																							<span class="text-muted fw-semibold d-block fs-7">Movie Creator</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/avatars/300-5.jpg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																							<span class="text-muted fw-semibold d-block fs-7">HTML, CSS Coding</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/avatars/300-20.jpg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Lebron Wayde</a>
																							<span class="text-muted fw-semibold d-block fs-7">ReactJS Developer</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/avatars/300-23.jpg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
																							<span class="text-muted fw-semibold d-block fs-7">UI/UX Designer</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/avatars/300-10.jpg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Kevin Leonard</a>
																							<span class="text-muted fw-semibold d-block fs-7">Art Director</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																				</tbody>
																				<!--end::Table body-->
																			</table>
																		</div>
																		<!--end::Table-->
																	</div>
																	<!--end::Tap pane-->
																	<!--begin::Tap pane-->
																	<div class="tab-pane fade" id="kt_table_widget_4_tab_2" role="tabpanel">
																		<!--begin::Table container-->
																		<div class="table-responsive">
																			<!--begin::Table-->
																			<table class="table align-middle gs-0 gy-3">
																				<!--begin::Table head-->
																				<thead>
																					<tr>
																						<th class="p-0 w-50px"></th>
																						<th class="p-0 min-w-150px"></th>
																						<th class="p-0 min-w-140px"></th>
																						<th class="p-0 min-w-120px"></th>
																					</tr>
																				</thead>
																				<!--end::Table head-->
																				<!--begin::Table body-->
																				<tbody>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/svg/avatars/043-boy-18.svg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Kevin Leonard</a>
																							<span class="text-muted fw-semibold d-block fs-7">Art Director</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/svg/avatars/014-girl-7.svg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
																							<span class="text-muted fw-semibold d-block fs-7">UI/UX Designer</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/svg/avatars/018-girl-9.svg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																							<span class="text-muted fw-semibold d-block fs-7">HTML, CSS Coding</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/svg/avatars/001-boy.svg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
																							<span class="text-muted fw-semibold d-block fs-7">Movie Creator</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																				</tbody>
																				<!--end::Table body-->
																			</table>
																		</div>
																		<!--end::Table-->
																	</div>
																	<!--end::Tap pane-->
																	<!--begin::Tap pane-->
																	<div class="tab-pane fade" id="kt_table_widget_4_tab_3" role="tabpanel">
																		<!--begin::Table container-->
																		<div class="table-responsive">
																			<!--begin::Table-->
																			<table class="table align-middle gs-0 gy-3">
																				<!--begin::Table head-->
																				<thead>
																					<tr>
																						<th class="p-0 w-50px"></th>
																						<th class="p-0 min-w-150px"></th>
																						<th class="p-0 min-w-140px"></th>
																						<th class="p-0 min-w-120px"></th>
																					</tr>
																				</thead>
																				<!--end::Table head-->
																				<!--begin::Table body-->
																				<tbody>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/svg/avatars/018-girl-9.svg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																							<span class="text-muted fw-semibold d-block fs-7">HTML, CSS Coding</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/svg/avatars/047-girl-25.svg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Lebron Wayde</a>
																							<span class="text-muted fw-semibold d-block fs-7">ReactJS Developer</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																					<tr>
																						<td>
																							<div class="symbol symbol-50px">
																								<img src="/metronic8/demo18/assets/media/svg/avatars/014-girl-7.svg" alt="">
																							</div>
																						</td>
																						<td>
																							<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
																							<span class="text-muted fw-semibold d-block fs-7">UI/UX Designer</span>
																						</td>
																						<td>
																							<span class="text-muted fw-semibold d-block fs-7">Rating</span>
																							<div class="rating">
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																								<div class="rating-label me-2 checked">
																									<i class="bi bi-star-fill fs-5"></i>
																								</div>
																							</div>
																						</td>
																						<td class="text-end">
																							<a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
																								<i class="bi bi-twitter fs-4"></i>
																							</a>
																							<a href="#" class="btn btn-icon btn-light-facebook btn-sm">
																								<i class="bi bi-facebook fs-4"></i>
																							</a>
																						</td>
																					</tr>
																				</tbody>
																				<!--end::Table body-->
																			</table>
																		</div>
																		<!--end::Table-->
																	</div>
																	<!--end::Tap pane-->
																</div>
															</div>
															<!--end::Body-->
														</div>
														<!--end::Tables Widget 4-->
													</div>
													<div class="tab-pane fade active show" id="kt_general_widget_1_5" role="tabpanel">
														<!--begin::Tables Widget 1-->
														<div class="card">
															<!--begin::Header-->
															<div class="card-header border-0 pt-5">
																<h3 class="card-title align-items-start flex-column">
																	<span class="card-label fw-bold fs-3 mb-1">Tasks Overview</span>
																	<span class="text-muted fw-semibold fs-7">Pending 10 tasks</span>
																</h3>
																<div class="card-toolbar">
																	<!--begin::Menu-->
																	<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
																		<span class="svg-icon svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
																					<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																					<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																					<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</button>
																	<!--begin::Menu 1-->
																	<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_635845c8000ef">
																		<!--begin::Header-->
																		<div class="px-7 py-5">
																			<div class="fs-5 text-dark fw-bold">Filter Options</div>
																		</div>
																		<!--end::Header-->
																		<!--begin::Menu separator-->
																		<div class="separator border-gray-200"></div>
																		<!--end::Menu separator-->
																		<!--begin::Form-->
																		<div class="px-7 py-5">
																			<!--begin::Input group-->
																			<div class="mb-10">
																				<!--begin::Label-->
																				<label class="form-label fw-semibold">Status:</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<div>
																					<select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_635845c8000ef" data-allow-clear="true" data-select2-id="select2-data-10-fquy" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																						<option data-select2-id="select2-data-12-mn76"></option>
																						<option value="1">Approved</option>
																						<option value="2">Pending</option>
																						<option value="2">In Process</option>
																						<option value="2">Rejected</option>
																					</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-cwx9" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-tond-container" aria-controls="select2-tond-container"><span class="select2-selection__rendered" id="select2-tond-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																				</div>
																				<!--end::Input-->
																			</div>
																			<!--end::Input group-->
																			<!--begin::Input group-->
																			<div class="mb-10">
																				<!--begin::Label-->
																				<label class="form-label fw-semibold">Member Type:</label>
																				<!--end::Label-->
																				<!--begin::Options-->
																				<div class="d-flex">
																					<!--begin::Options-->
																					<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																						<input class="form-check-input" type="checkbox" value="1">
																						<span class="form-check-label">Author</span>
																					</label>
																					<!--end::Options-->
																					<!--begin::Options-->
																					<label class="form-check form-check-sm form-check-custom form-check-solid">
																						<input class="form-check-input" type="checkbox" value="2" checked="checked">
																						<span class="form-check-label">Customer</span>
																					</label>
																					<!--end::Options-->
																				</div>
																				<!--end::Options-->
																			</div>
																			<!--end::Input group-->
																			<!--begin::Input group-->
																			<div class="mb-10">
																				<!--begin::Label-->
																				<label class="form-label fw-semibold">Notifications:</label>
																				<!--end::Label-->
																				<!--begin::Switch-->
																				<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																					<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																					<label class="form-check-label">Enabled</label>
																				</div>
																				<!--end::Switch-->
																			</div>
																			<!--end::Input group-->
																			<!--begin::Actions-->
																			<div class="d-flex justify-content-end">
																				<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																				<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																			</div>
																			<!--end::Actions-->
																		</div>
																		<!--end::Form-->
																	</div>
																	<!--end::Menu 1-->
																	<!--end::Menu-->
																</div>
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div class="card-body py-3">
																<!--begin::Table container-->
																<div class="table-responsive">
																	<!--begin::Table-->
																	<table class="table align-middle gs-0 gy-5">
																		<!--begin::Table head-->
																		<thead>
																			<tr>
																				<th class="p-0 w-50px"></th>
																				<th class="p-0 min-w-200px"></th>
																				<th class="p-0 min-w-100px"></th>
																				<th class="p-0 min-w-40px"></th>
																			</tr>
																		</thead>
																		<!--end::Table head-->
																		<!--begin::Table body-->
																		<tbody>
																			<tr>
																				<th>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label">
																							<img src="/metronic8/demo18/assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
																						</span>
																					</div>
																				</th>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Top Authors</a>
																					<span class="text-muted fw-semibold d-block fs-7">Successful Fellas</span>
																				</td>
																				<td>
																					<div class="d-flex flex-column w-100 me-2">
																						<div class="d-flex flex-stack mb-2">
																							<span class="text-muted me-2 fs-7 fw-bold">70%</span>
																						</div>
																						<div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																						</div>
																					</div>
																				</td>
																				<td class="text-end">
																					<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																						<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																								<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</a>
																				</td>
																			</tr>
																			<tr>
																				<th>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label">
																							<img src="/metronic8/demo18/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
																						</span>
																					</div>
																				</th>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
																					<span class="text-muted fw-semibold d-block fs-7">Most Successful</span>
																				</td>
																				<td>
																					<div class="d-flex flex-column w-100 me-2">
																						<div class="d-flex flex-stack mb-2">
																							<span class="text-muted me-2 fs-7 fw-bold">50%</span>
																						</div>
																						<div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div>
																					</div>
																				</td>
																				<td class="text-end">
																					<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																						<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																								<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</a>
																				</td>
																			</tr>
																			<tr>
																				<th>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label">
																							<img src="/metronic8/demo18/assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
																						</span>
																					</div>
																				</th>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">New Users</a>
																					<span class="text-muted fw-semibold d-block fs-7">Awesome Users</span>
																				</td>
																				<td>
																					<div class="d-flex flex-column w-100 me-2">
																						<div class="d-flex flex-stack mb-2">
																							<span class="text-muted me-2 fs-7 fw-bold">80%</span>
																						</div>
																						<div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
																						</div>
																					</div>
																				</td>
																				<td class="text-end">
																					<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																						<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																								<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</a>
																				</td>
																			</tr>
																			<tr>
																				<th>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label">
																							<img src="/metronic8/demo18/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
																						</span>
																					</div>
																				</th>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
																					<span class="text-muted fw-semibold d-block fs-7">Best Customers</span>
																				</td>
																				<td>
																					<div class="d-flex flex-column w-100 me-2">
																						<div class="d-flex flex-stack mb-2">
																							<span class="text-muted me-2 fs-7 fw-bold">90%</span>
																						</div>
																						<div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
																						</div>
																					</div>
																				</td>
																				<td class="text-end">
																					<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																						<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																								<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</a>
																				</td>
																			</tr>
																			<tr>
																				<th>
																					<div class="symbol symbol-50px me-2">
																						<span class="symbol-label">
																							<img src="/metronic8/demo18/assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">
																						</span>
																					</div>
																				</th>
																				<td>
																					<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																					<span class="text-muted fw-semibold d-block fs-7">Amazing Templates</span>
																				</td>
																				<td>
																					<div class="d-flex flex-column w-100 me-2">
																						<div class="d-flex flex-stack mb-2">
																							<span class="text-muted me-2 fs-7 fw-bold">70%</span>
																						</div>
																						<div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																						</div>
																					</div>
																				</td>
																				<td class="text-end">
																					<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																						<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																						<span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
																								<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</a>
																				</td>
																			</tr>
																		</tbody>
																		<!--end::Table body-->
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Table container-->
															</div>
															<!--end::Body-->
														</div>
														<!--endW::Tables Widget 1-->
													</div>
												</div>
												<!--end::Tab content-->
											</div>
											<!--end::Chart widget 32-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4 mb-xl-10">
											<!--begin::List widget 17-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Most Popular Products</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="../../demo21/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">Add Product</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-0">
													<!--begin::Content-->
													<div class="d-flex flex-stack my-5">
														<span class="text-gray-400 fs-7 fw-bold">ITEM</span>
														<span class="text-gray-400 fw-bold fs-7">ITEM PRICE</span>
													</div>
													<!--end::Content-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/14.gif" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="../../demo21/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Fjallraven</a>
																<span class="text-gray-400 fw-semibold d-block fs-7">Item: #XDG-6437</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 72.00</span>
														<!--end::Value-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-4"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/13.gif" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="../../demo21/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Nike AirMax</a>
																<span class="text-gray-400 fw-semibold d-block fs-7">Item: #XDG-1836</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 45.00</span>
														<!--end::Value-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-4"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/41.gif" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="../../demo21/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Bose QC 35</a>
																<span class="text-gray-400 fw-semibold d-block fs-7">Item: #XDG-6254</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 168.00</span>
														<!--end::Value-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-4"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/53.gif" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="../../demo21/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Greeny</a>
																<span class="text-gray-400 fw-semibold d-block fs-7">Item: #XDG-1746</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 14.50</span>
														<!--end::Value-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-4"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/71.gif" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="../../demo21/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Apple Watches</a>
																<span class="text-gray-400 fw-semibold d-block fs-7">Item: #XDG-6245</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 362.00</span>
														<!--end::Value-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-4"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/194.gif" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="../../demo21/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Friendly Robot</a>
																<span class="text-gray-400 fw-semibold d-block fs-7">Item: #XDG-2347</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 48.00</span>
														<!--end::Value-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::List widget 17-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8 mb-5 mb-xl-10">
											<!--begin::Table widget 6-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Leading Agents by Category</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="../../demo21/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">Add Product</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom mb-3">
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="fonticon-truck fs-1 p-0"></i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Van</span>
																<!--end::Title-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_2">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="fonticon-bicycle fs-1 p-0"></i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Bike</span>
																<!--end::Title-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_3">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="fonticon-drone fs-1 p-0"></i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Drone</span>
																<!--end::Title-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="p-0 w-200px w-xxl-450px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-190px"></th>
																			<th class="p-0 w-50px"></th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-13.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
															</div>
															<!--end::Table-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_6_tab_2">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="p-0 w-200px w-xxl-450px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-190px"></th>
																			<th class="p-0 w-50px"></th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-13.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
															</div>
															<!--end::Table-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_6_tab_3">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="p-0 w-200px w-xxl-450px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-190px"></th>
																			<th class="p-0 w-50px"></th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-13.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
																				<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																					<div class="rating-label me-1 checked">
																						<i class="bi bi-star-fill fs-6s"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
															</div>
															<!--end::Table-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Table widget 6-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::List widget 18-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Lading Companies</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<ul class="nav me-n1" id="kt_chart_widget_11_tabs">
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_list_widget_18_tab_1" href="#kt_list_widget_18_tab_content_1">2021</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_list_widget_18_tab_2" href="#kt_list_widget_18_tab_content_2">Month</a>
															</li>
														</ul>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-4">
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_list_widget_18_tab_content_1">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->4.1%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">794</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->0.2%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->1.9%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->8.3%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">579</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->2.6%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-danger fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																				<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->0.4%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_list_widget_18_tab_content_2">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">579</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->2.6%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-danger fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																				<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->0.4%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">794</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->0.2%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->4.1%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->8.3%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->1.9%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::List widget 18-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8">
											<!--begin::Chart widget 17-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Sales Statistics</span>
														<span class="text-gray-400 pt-2 fw-semibold fs-6">Top Selling Products</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
																	<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Menu 3-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
															<!--begin::Heading-->
															<div class="menu-item px-3">
																<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
															</div>
															<!--end::Heading-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Create Invoice</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link flex-stack px-3">Create Payment
																<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Generate Bill</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">Subscription</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Plans</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Billing</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Statements</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu separator-->
																	<div class="separator my-2"></div>
																	<!--end::Menu separator-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3">
																			<!--begin::Switch-->
																			<label class="form-check form-switch form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																				<!--end::Input-->
																				<!--end::Label-->
																				<span class="form-check-label text-muted fs-6">Recuring</span>
																				<!--end::Label-->
																			</label>
																			<!--end::Switch-->
																		</div>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3 my-1">
																<a href="#" class="menu-link px-3">Settings</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 3-->
														<!--end::Menu-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-5">
													<!--begin::Chart container-->
													<div id="kt_charts_widget_17_chart" class="w-100 h-400px"></div>
													<!--end::Chart container-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 17-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Post-->
							</div>
							<!--end::Main-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Container-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-custom container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">2022&copy;</span>
								<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->
		<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
			<div class="card shadow-none border-0 rounded-0">
				<!--begin::Header-->
				<div class="card-header" id="kt_activities_header">
					<h3 class="card-title fw-bold text-dark">Activity Logs</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body position-relative" id="kt_activities_body">
					<!--begin::Content-->
					<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
						<!--begin::Timeline items-->
						<div class="timeline">
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
												<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
											<!--begin::Title-->
											<a href="../../demo21/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px pe-2">
												<span class="badge badge-light text-muted">Application Design</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px pe-2">
												<span class="badge badge-light-primary">In Progress</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="../../demo21/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
											<!--begin::Title-->
											<a href="../../demo21/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px">
												<span class="badge badge-light text-muted">CRM System Development</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-20.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px">
												<span class="badge badge-light-success">Completed</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="../../demo21/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
												<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n2">
									<!--begin::Timeline heading-->
									<div class="overflow-auto pe-3">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
												<img src="assets/media/avatars/300-1.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
												<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="mb-5 pe-3">
										<!--begin::Title-->
										<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
												<img src="assets/media/avatars/300-23.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="../../demo21/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">1.9mb</div>
													<!--end::Number-->
												</div>
												<!--begin::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="../../demo21/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">18kb</div>
													<!--end::Number-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center">
												<!--begin::Icon-->
												<img alt="../../demo21/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">20mb</div>
													<!--end::Number-->
												</div>
												<!--end::Icon-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
												<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Task
										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
												<img src="assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
												<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New case
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="overflow-auto pb-5">
											<!--begin::Wrapper-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
												<!--end::User-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
												<img src="assets/media/avatars/300-4.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="currentColor" />
													<path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
												<!--begin::Content-->
												<div class="mb-3 mb-md-0 fw-semibold">
													<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
													<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
												<!--end::Action-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
												<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
												<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New order
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
						</div>
						<!--end::Timeline items-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer py-5 text-center" id="kt_activities_footer">
					<a href="../../demo21/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
					<span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon--></a>
				</div>
				<!--end::Footer-->
			</div>
		</div>
		<!--end::Activities drawer-->
		<!--begin::Chat drawer-->
		<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
			<!--begin::Messenger-->
			<div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
				<!--begin::Card header-->
				<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
					<!--begin::Title-->
					<div class="card-title">
						<!--begin::User-->
						<div class="d-flex justify-content-center flex-column me-3">
							<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
							<!--begin::Info-->
							<div class="mb-0 lh-1">
								<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
								<span class="fs-7 fw-semibold text-muted">Active</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::User-->
					</div>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Menu-->
						<div class="me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="bi bi-three-dots fs-3"></i>
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="menu-item px-3">
									<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
								</div>
								<!--end::Heading-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation"></i></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<a href="#" class="menu-link px-3">
										<span class="menu-title">Groups</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-1">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 3-->
						</div>
						<!--end::Menu-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body" id="kt_drawer_chat_messenger_body">
					<!--begin::Messages-->
					<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">2 mins</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">5 mins</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">1 Hour</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">2 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">3 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
								<a href="https://keenthemes.com">Keenthemes.com</a></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">4 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">5 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(template for out)-->
						<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">Just now</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for out)-->
						<!--begin::Message(template for in)-->
						<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">Just now</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for in)-->
					</div>
					<!--end::Messages-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
					<!--begin::Input-->
					<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
					<!--end::Input-->
					<!--begin:Toolbar-->
					<div class="d-flex flex-stack">
						<!--begin::Actions-->
						<div class="d-flex align-items-center me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="bi bi-paperclip fs-3"></i>
							</button>
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="bi bi-upload fs-3"></i>
							</button>
						</div>
						<!--end::Actions-->
						<!--begin::Send-->
						<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
						<!--end::Send-->
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--end::Drawers-->
		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->
		<!--begin::Modal - Create App-->
		<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Create App</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10">
						<!--begin::Stepper-->
						<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
							<!--begin::Aside-->
							<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
								<!--begin::Nav-->
								<div class="stepper-nav ps-lg-10">
									<!--begin::Step 1-->
									<div class="stepper-item current" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">1</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Details</h3>
												<div class="stepper-desc">Name your App</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">2</span>
											</div>
											<!--begin::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Frameworks</h3>
												<div class="stepper-desc">Define your app framework</div>
											</div>
											<!--begin::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">3</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Database</h3>
												<div class="stepper-desc">Select the app database type</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">4</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Billing</h3>
												<div class="stepper-desc">Provide payment details</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 4-->
									<!--begin::Step 5-->
									<div class="stepper-item mark-completed" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">5</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Completed</h3>
												<div class="stepper-desc">Review and Submit</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Step 5-->
								</div>
								<!--end::Nav-->
							</div>
							<!--begin::Aside-->
							<!--begin::Content-->
							<div class="flex-row-fluid py-lg-5 px-lg-15">
								<!--begin::Form-->
								<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
									<!--begin::Step 1-->
									<div class="current" data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
													<span class="required">App Name</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Category</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app category"></i>
												</label>
												<!--end::Label-->
												<!--begin:Options-->
												<div class="fv-row">
													<!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor" />
																			<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Quick Online Courses</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="1" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
													<!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-danger">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-danger">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
																			<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
																			<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
																			<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Face to Face Discussions</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="2" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
													<!--begin:Option-->
													<label class="d-flex flex-stack cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-success">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-success">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor" />
																			<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Full Intro Training</span>
																<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="3" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
												</div>
												<!--end:Options-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Select Framework</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your apps framework"></i>
												</label>
												<!--end::Label-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-html5 text-warning fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">HTML5</span>
															<span class="fs-7 text-muted">Base Web Projec</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fab fa-react text-success fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">ReactJS</span>
															<span class="fs-7 text-muted">Robust and flexible app framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="2" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-angular text-danger fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Angular</span>
															<span class="fs-7 text-muted">Powerful data mangement</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="3" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<i class="fab fa-vuejs text-primary fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Vue</span>
															<span class="fs-7 text-muted">Lightweight and responsive framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="4" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="required fs-5 fw-semibold mb-2">Database Name</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Select Database Engine</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
												</label>
												<!--end::Label-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fas fa-database text-success fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">MySQL</span>
															<span class="fs-7 text-muted">Basic MySQL database</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-google text-danger fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Firebase</span>
															<span class="fs-7 text-muted">Google based app data management</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="2" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-amazon text-warning fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">DynamoDB</span>
															<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="3" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-7 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
													<span class="required">Name On Card</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
												</label>
												<!--end::Label-->
												<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-7 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
												<!--end::Label-->
												<!--begin::Input wrapper-->
												<div class="position-relative">
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
													<!--end::Input-->
													<!--begin::Card logos-->
													<div class="position-absolute translate-middle-y top-50 end-0 me-5">
														<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
														<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
														<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
													</div>
													<!--end::Card logos-->
												</div>
												<!--end::Input wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Col-->
												<div class="col-md-8 fv-row">
													<!--begin::Label-->
													<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
													<!--end::Label-->
													<!--begin::Row-->
													<div class="row fv-row">
														<!--begin::Col-->
														<div class="col-6">
															<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
																<option></option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
															</select>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-6">
															<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
																<option></option>
																<option value="2022">2022</option>
																<option value="2023">2023</option>
																<option value="2024">2024</option>
																<option value="2025">2025</option>
																<option value="2026">2026</option>
																<option value="2027">2027</option>
																<option value="2028">2028</option>
																<option value="2029">2029</option>
																<option value="2030">2030</option>
																<option value="2031">2031</option>
																<option value="2032">2032</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
														<span class="required">CVV</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
													</label>
													<!--end::Label-->
													<!--begin::Input wrapper-->
													<div class="position-relative">
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
														<!--end::Input-->
														<!--begin::CVV icon-->
														<div class="position-absolute translate-middle-y top-50 end-0 me-3">
															<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
															<span class="svg-icon svg-icon-2hx">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M22 7H2V11H22V7Z" fill="currentColor" />
																	<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::CVV icon-->
													</div>
													<!--end::Input wrapper-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
													<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
													<span class="form-check-label fw-semibold text-muted">Save Card</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 4-->
									<!--begin::Step 5-->
									<div data-kt-stepper-element="content">
										<div class="w-100 text-center">
											<!--begin::Heading-->
											<h1 class="fw-bold text-dark mb-3">Release!</h1>
											<!--end::Heading-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
											<!--end::Description-->
											<!--begin::Illustration-->
											<div class="text-center px-4 py-15">
												<img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
											</div>
											<!--end::Illustration-->
										</div>
									</div>
									<!--end::Step 5-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack pt-10">
										<!--begin::Wrapper-->
										<div class="me-2">
											<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
											<span class="svg-icon svg-icon-3 me-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
													<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Back</button>
										</div>
										<!--end::Wrapper-->
										<!--begin::Wrapper-->
										<div>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Submit
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon--></span>
												<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></button>
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create App-->
		<!--begin::Modal - New Target-->
		<div class="modal fade" id="kt_modal_bidding" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
						<!--begin:Form-->
						<form id="kt_modal_bidding_form" class="form" action="#">
							<!--begin::Heading-->
							<div class="mb-13 text-center">
								<!--begin::Title-->
								<h1 class="mb-3">Place your bids</h1>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-5">If you need more info, please check
								<a href="#" class="fw-bold link-primary">Bidding Guidelines</a>.</div>
								<!--end::Description-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Bid Amount</span>
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify the bid amount to place in."></i>
								</label>
								<!--end::Label-->
								<!--begin::Bid options-->
								<div class="d-flex flex-stack gap-5 mb-3">
									<button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">10</button>
									<button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">50</button>
									<button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">100</button>
								</div>
								<!--begin::Bid options-->
								<input type="text" class="form-control form-control-solid" placeholder="Enter Bid Amount" name="bid_amount" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-8">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Currency Type</span>
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select the currency type."></i>
								</label>
								<!--end::Label-->
								<!--begin::Select2-->
								<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Currency Type" name="currency_type">
									<option value=""></option>
									<option value="dollar" selected="selected">Dollar</option>
									<option value="crypto">Crypto</option>
								</select>
								<!--end::Select2-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-8">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span>Currency</span>
								</label>
								<!--end::Label-->
								<!--begin::Dollar type-->
								<div class="" data-kt-modal-bidding-type="dollar">
									<!--begin::Select2-->
									<select name="currency_dollar" aria-label="Select a Currency" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
										<option data-kt-bidding-modal-option-icon="flags/united-states.svg" value="USD" selected="selected">
										<b>USD</b>&nbsp;-&nbsp;USA dollar</option>
										<option data-kt-bidding-modal-option-icon="flags/united-kingdom.svg" value="GBP">
										<b>GBP</b>&nbsp;-&nbsp;British pound</option>
										<option data-kt-bidding-modal-option-icon="flags/australia.svg" value="AUD">
										<b>AUD</b>&nbsp;-&nbsp;Australian dollar</option>
										<option data-kt-bidding-modal-option-icon="flags/japan.svg" value="JPY">
										<b>JPY</b>&nbsp;-&nbsp;Japanese yen</option>
										<option data-kt-bidding-modal-option-icon="flags/sweden.svg" value="SEK">
										<b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
										<option data-kt-bidding-modal-option-icon="flags/canada.svg" value="CAD">
										<b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
										<option data-kt-bidding-modal-option-icon="flags/switzerland.svg" value="CHF">
										<b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
									</select>
									<!--end::Select2-->
								</div>
								<!--end::Dollar type-->
								<!--begin::Crypto type-->
								<div class="d-none" data-kt-modal-bidding-type="crypto">
									<!--begin::Select2-->
									<select name="currency_crypto" aria-label="Select a Coin" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
										<option data-kt-bidding-modal-option-icon="svg/coins/bitcoin.svg" value="1" selected="selected">Bitcoin</option>
										<option data-kt-bidding-modal-option-icon="svg/coins/binance.svg" value="2">Binance</option>
										<option data-kt-bidding-modal-option-icon="svg/coins/chainlink.svg" value="3">Chainlink</option>
										<option data-kt-bidding-modal-option-icon="svg/coins/coin.svg" value="4">Coin</option>
										<option data-kt-bidding-modal-option-icon="svg/coins/ethereum.svg" value="5">Ethereum</option>
										<option data-kt-bidding-modal-option-icon="svg/coins/filecoin.svg" value="6">Filecoin</option>
									</select>
									<!--end::Select2-->
								</div>
								<!--end::Crypto type-->
							</div>
							<!--end::Input group-->
							<!--begin::Notice-->
							<!--begin::Notice-->
							<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
								<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor" />
										<path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor" />
										<path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-grow-1">
									<!--begin::Content-->
									<div class="fw-semibold">
										<h4 class="text-gray-900 fw-bold">Top up funds</h4>
										<div class="fs-6 text-gray-700">Not enough funds in your wallet?
										<a href="../../demo21/dist/utilities/modals/wizards/top-up-wallet.html" class="text-bolder">Top up wallet</a>.</div>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Notice-->
							<!--end::Notice-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="reset" class="btn btn-light me-3" data-kt-modal-action-type="cancel">Cancel</button>
								<button type="submit" class="btn btn-primary" data-kt-modal-action-type="submit">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end:Form-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - New Target-->
		<!--begin::Modal - Users Search-->
		<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Content-->
						<div class="text-center mb-13">
							<h1 class="mb-3">Search Users</h1>
							<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
						</div>
						<!--end::Content-->
						<!--begin::Search-->
						<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
							<!--begin::Form-->
							<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
											<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Wrapper-->
							<div class="py-5">
								<!--begin::Suggestions-->
								<div data-kt-search-element="suggestions">
									<!--begin::Heading-->
									<h3 class="fw-semibold mb-5">Recently searched:</h3>
									<!--end::Heading-->
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
												<span class="badge badge-light">Art Director</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
												<span class="badge badge-light">Marketing Analytic</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Max Smith</span>
												<span class="badge badge-light">Software Enginer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
												<span class="badge badge-light">Web Developer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
												<span class="badge badge-light">UI/UX Designer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
									</div>
									<!--end::Users-->
								</div>
								<!--end::Suggestions-->
								<!--begin::Results(add d-none to below element to hide the users list by default)-->
								<div data-kt-search-element="results" class="d-none">
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
													<div class="fw-semibold text-muted">melody@altbox.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
													<div class="fw-semibold text-muted">max@kt.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
													<div class="fw-semibold text-muted">sean@dellito.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
													<div class="fw-semibold text-muted">brian@exchange.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
													<div class="fw-semibold text-muted">mik@pex.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
													<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
													<div class="fw-semibold text-muted">olivia@corpmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
													<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
													<div class="fw-semibold text-muted">emma@intenso.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
													<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
													<div class="fw-semibold text-muted">robert@benko.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
													<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
													<div class="fw-semibold text-muted">ethan@loop.com.au</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Actions-->
									<div class="d-flex flex-center mt-15">
										<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
										<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Results-->
								<!--begin::Empty-->
								<div data-kt-search-element="empty" class="text-center d-none">
									<!--begin::Message-->
									<div class="fw-semibold py-10">
										<div class="text-gray-600 fs-3 mb-2">No users found</div>
										<div class="text-muted fs-6">Try to search by username, full name or email...</div>
									</div>
									<!--end::Message-->
									<!--begin::Illustration-->
									<div class="text-center px-5">
										<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Empty-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Search-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Users Search-->
		<!--begin::Modal - Invite Friends-->
		<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Invite a Friend</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Google Contacts Invite-->
						<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
						<!--end::Google Contacts Invite-->
						<!--begin::Separator-->
						<div class="separator d-flex flex-center mb-8">
							<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
						</div>
						<!--end::Separator-->
						<!--begin::Textarea-->
						<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
						<!--end::Textarea-->
						<!--begin::Users-->
						<div class="mb-10">
							<!--begin::Heading-->
							<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
							<!--end::Heading-->
							<!--begin::List-->
							<div class="mh-300px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="me-5 fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/bidding.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>