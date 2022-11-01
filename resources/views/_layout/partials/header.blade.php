<div id="kt_header" class="header">
    <!--begin::Header top-->
    <div class="header-top d-flex align-items-stretch flex-grow-1 h-100px h-lg-125px" data-kt-sticky="true" data-kt-sticky-name="header-topbar" data-kt-sticky-offset="{default: '100px', lg: 'false'}" data-kt-sticky-dependencies="#kt_wrapper" data-kt-sticky-class="fixed-top bg-body shadow-sm border-0">
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
                    <a href="../../demo21/dist/index.html" class="d-flex align-items-center me-12">
                        <img alt="Logo" src="assets/media/logos/logo_prefeitura.png" class="h-40px h-lg-50px" />
                    </a>
                    <!--end::Logo-->
                    <div class="d-flex align-items-center flex-wrap me-2">
                        <!--begin::Page Title-->
                        <h5 class="text-white fw-light fs-3 mt-2 mb-2 me-5">Ouvidoria Digital</h5>
                        <!--end::Page Title-->
                        <!--begin::Action-->
                        <div class="bullet bg-secondary d-none d-lg-block h-20px w-1px me-5"></div>
                        <span class="text-gray-200 fw-bold fs-7 mr-4">COG - CONTROLADORIA E OUVIDORIA GERAL</span>
                        <!--end::Action-->
                    </div>
                </div>
                <!--end::Brand-->
                <!--begin::Topbar-->
                @include('layout.partials.header.topbar')
                <!--end::Topbar-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Brand container-->
    </div>
    <!--end::Header top-->
    <!--begin::Header bottom-->
    @include('layout.partials.header.menu')
    <!--end::Header bottom-->
</div>