@extends('front.layout._theme')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-10">
    <!--begin::Col-->
    <div class="col-lg-8">
        <div class="card shadow-none">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Title-->
                <div class="card-title fw-bold text-gray-900 text-uppercase fs-7">Acompanhe sua Manifestação</div>
                <!--end::Title-->
                <div class="card-toolbar">
                    <div class="mb-0 lh-1">
                        <span class="badge badge-primary badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-gray-600 text-uppercase">Tramitando</span>
                    </div>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">

                <!--begin::Wrapper-->
                <div class="d-flex align-items-sm-center mb-10">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-circle symbol-52px me-3">
                        <span class="symbol-label bg-light-danger">
                            <!--begin::Svg Icon-->
                            <span class="svg-icon svg-icon-2x svg-icon-danger">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                    <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"/>
                                    <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Section-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <div class="flex-grow-1 me-2">
                            <span class="text-gray-400 fw-semibold fs-7">Assunto</span>
                            <span class="text-gray-800 text-uppercase fw-bold d-block fs-7">Denúncia</span>
                        </div>
                        <span class="text-gray-600 text-uppercase fw-semibold d-block fs-2hx">1355241122</span>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Wrapper-->

                <div class="rounded bg-light p-5">
                    <div class="d-flex flex-row justify-content-end pb-5">
                        <div>
                            <div class="bg-white rounded p-5 mb-1 fs-7">
                                <p class="text-dark text-uppercase fw-bold mb-4 fs-8">Você digitou:</p>
                                <p class="text-gray-800 fw-semibold mb-0 fs-7">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="separator separator-dashed my-4"></div>
                                <p class="text-dark text-uppercase fw-bold mb-4 fs-8">Anexos a esta Mensagem:</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="text-gray-800 fw-semibold mb-0 fs-7"><i class="bi bi-paperclip me-1"></i>Certidão.docx</p>
                                    </div>
                                    <div class="col">
                                        <p class="text-gray-800 fw-semibold mb-0 fs-7"><i class="bi bi-paperclip me-1"></i>Alvará.docx</p>
                                    </div>
                                    <div class="col">
                                        <p class="text-gray-800 fw-semibold mb-0 fs-7"><i class="bi bi-paperclip me-1"></i>Registro.docx</p>
                                    </div>
                                </div>
                            </div>
                            <div class="small text-muted float-end">08:35 | 28/11/2023</div>
                        </div>
                        <!--begin::Symbol-->
                        <div class="symbol symbol-circle symbol-40px ms-3">
                            <span class="symbol-label bg-white">
                                <!--begin::Svg Icon-->
                                <span class="svg-icon svg-icon-2x svg-icon-success">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor"/>
                                        <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor"/>
                                        <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Symbol-->
                    </div>
                    <div class="d-flex flex-row justify-content-start pb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-circle symbol-40px me-3">
                            <span class="symbol-label bg-white p-0">
                                <!--begin::Svg Icon-->
                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"/>
                                        <path d="M8.70001 6C8.10001 5.7 7.39999 5.40001 6.79999 5.10001C7.79999 4.00001 8.90001 3 10.1 2.2C10.7 2.1 11.4 2 12 2C12.7 2 13.3 2.1 13.9 2.2C12 3.2 10.2 4.5 8.70001 6ZM12 8.39999C13.9 6.59999 16.2 5.30001 18.7 4.60001C18.1 4.00001 17.4 3.6 16.7 3.2C14.4 4.1 12.2 5.40001 10.5 7.10001C11 7.50001 11.5 7.89999 12 8.39999ZM7 20C7 20.2 7 20.4 7 20.6C6.2 20.1 5.49999 19.6 4.89999 19C4.59999 18 4.00001 17.2 3.20001 16.6C2.80001 15.8 2.49999 15 2.29999 14.1C4.99999 14.7 7 17.1 7 20ZM10.6 9.89999C8.70001 8.09999 6.39999 6.9 3.79999 6.3C3.39999 6.9 2.99999 7.5 2.79999 8.2C5.39999 8.6 7.7 9.80001 9.5 11.6C9.8 10.9 10.2 10.4 10.6 9.89999ZM2.20001 10.1C2.10001 10.7 2 11.4 2 12C2 12 2 12 2 12.1C4.3 12.4 6.40001 13.7 7.60001 15.6C7.80001 14.8 8.09999 14.1 8.39999 13.4C6.89999 11.6 4.70001 10.4 2.20001 10.1ZM11 20C11 14 15.4 9.00001 21.2 8.10001C20.9 7.40001 20.6 6.8 20.2 6.2C13.8 7.5 9 13.1 9 19.9C9 20.4 9.00001 21 9.10001 21.5C9.80001 21.7 10.5 21.8 11.2 21.9C11.1 21.3 11 20.7 11 20ZM19.1 19C19.4 18 20 17.2 20.8 16.6C21.2 15.8 21.5 15 21.7 14.1C19 14.7 16.9 17.1 16.9 20C16.9 20.2 16.9 20.4 16.9 20.6C17.8 20.2 18.5 19.6 19.1 19ZM15 20C15 15.9 18.1 12.6 22 12.1C22 12.1 22 12.1 22 12C22 11.3 21.9 10.7 21.8 10.1C16.8 10.7 13 14.9 13 20C13 20.7 13.1 21.3 13.2 21.9C13.9 21.8 14.5 21.7 15.2 21.5C15.1 21 15 20.5 15 20Z" fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <div>
                            <div class="bg-white rounded p-5 mb-1 fs-7">
                                <p class="text-dark fw-bold text-uppercase mb-4 fs-8">Ouvidoria digitou:</p>
                                <p class="text-gray-800 fw-semibold mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div class="small mb-0 text-muted float-start">10:22 | 28/11/2023</div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <div>
                            <div class="bg-white rounded p-5 mb-1 fs-7">
                                <p class="text-gray-800 fw-bold text-uppercase mb-4 fs-8">Você digitou:</p>
                                <p class="text-gray-800 fw-semibold mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div class="small text-muted float-end">08:35 | 28/11/2023</div>
                        </div>
                        <!--begin::Symbol-->
                        <div class="symbol symbol-circle symbol-40px ms-3">
                            <span class="symbol-label bg-white">
                                <!--begin::Svg Icon-->
                                <span class="svg-icon svg-icon-2x svg-icon-success">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor"/>
                                        <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor"/>
                                        <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Symbol-->
                    </div>
                </div>

                <div class="my-7">
                    <!--begin::Input-->
                    <label class="form-label">Nova Mensagem</label>
                    <textarea class="form-control form-control-solid rounded-0 rounded-top" rows="5" data-kt-element="input" placeholder="Seja o mais claro e objetivo possível."></textarea>
                    <!--end::Input-->
                    <div class="rounded-0 rounded-bottom border border-top-0 p-5">
                        <!--begin::Form-->
                        <form class="form" action="#" method="post">
                            <!--begin::Input group-->
                            <div class="form-group row">
                                <!--begin::Col-->
                                <div class="col-lg-12">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone dropzone-queue mb-2" id="kt_dropzone">
                                        <!--begin::Controls-->
                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                            <a class="dropzone-select btn btn-sm btn-icon btn-light btn-active-primary me-1">
                                                <i class="bi bi-paperclip fs-3"></i>
                                            </a>
                                            <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                                        </div>
                                        <!--end::Controls-->

                                        <!--begin::Items-->
                                        <div class="dropzone-items wm-200px">
                                            <div class="dropzone-item" style="display:none">
                                                <!--begin::File-->
                                                <div class="dropzone-file">
                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                        <span data-dz-name>some_image_file_name.jpg</span>
                                                        <strong>(<span data-dz-size>340kb</span>)</strong>
                                                    </div>

                                                    <div class="dropzone-error" data-dz-errormessage></div>
                                                </div>
                                                <!--end::File-->

                                                <!--begin::Progress-->
                                                <div class="dropzone-progress">
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-primary"
                                                            role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->

                                                <!--begin::Toolbar-->
                                                <div class="dropzone-toolbar">
                                                    <span class="dropzone-delete" data-dz-remove><i class="bi bi-x fs-1"></i></span>
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Dropzone-->

                                    <!--begin::Hint-->
                                    <span class="form-text text-muted">Clique no botão para anexar até 3 arquivos de 10M cada.</span>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                                    <!--begin::Send-->
                <button class="btn btn-sm btn-primary text-uppercase" type="button" data-kt-element="send">Enviar</button>
                <!--end::Send-->
                </div>

            </div>
            <!--end::Card body-->                 
        </div>
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-lg-4">
        <!--begin::Card-->
        <div class="card shadow-none">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Title-->
                <div class="card-title fw-bold text-gray-900 text-uppercase fs-7">Histórico</div>
                <!--end::Title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="text-gray-700 fw-semibold fs-7 me-2">Criada em:</div>
                    <!--end::Section-->
                    <!--begin::Statistics-->
                    <div class="d-flex align-items-senter">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
                        <span class="svg-icon svg-icon-4 svg-icon-success me-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z" fill="currentColor" opacity="0.3"/>
                                    <path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="currentColor"/>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--begin::Number-->
                        <span class="text-gray-900 fw-bolder fs-7">28/11/2023 08:35</span>
                        <!--end::Number-->
                    </div>
                    <!--end::Statistics-->
                </div>
                <div class="separator separator-dashed my-5"></div>
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="text-gray-700 fw-semibold fs-7 me-2">Última Mensagem:</div>
                    <!--end::Section-->
                    <!--begin::Statistics-->
                    <div class="d-flex align-items-senter">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
                        <span class="svg-icon svg-icon-4 svg-icon-success me-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z" fill="currentColor" opacity="0.3"/>
                                    <path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="currentColor"/>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--begin::Number-->
                        <span class="text-gray-900 fw-bolder fs-7">28/11/2023 09:35</span>
                        <!--end::Number-->
                    </div>
                    <!--end::Statistics-->
                </div>
                <div class="separator separator-dashed my-5"></div>
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="text-gray-700 fw-semibold fs-7 me-2">Última Resposta:</div>
                    <!--end::Section-->
                    <!--begin::Statistics-->
                    <div class="d-flex align-items-senter">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
                        <span class="svg-icon svg-icon-4 svg-icon-success me-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z" fill="currentColor" opacity="0.3"/>
                                    <path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="currentColor"/>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--begin::Number-->
                        <span class="text-gray-900 fw-bolder fs-7">28/11/2023 10:22</span>
                        <!--end::Number-->
                    </div>
                    <!--end::Statistics-->
                </div>
                <div class="separator separator-dashed my-5"></div>
                <div class="d-flex flex-stack">
                    <!--begin::Section-->
                    <div class="text-gray-700 fw-semibold fs-7 me-2">Situação:</div>
                    <!--end::Section-->
                    <!--begin::Statistics-->
                    <div class="d-flex align-items-senter">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
                        <span class="svg-icon svg-icon-4 svg-icon-success me-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z" fill="currentColor" opacity="0.3"/>
                                    <path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="currentColor"/>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--begin::Number-->
                        <span class="text-gray-900 fw-bolder fs-7">Tramitando:</span>
                        <!--end::Number-->
                    </div>
                    <!--end::Statistics-->
                </div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card bg-primary bg-active-primary shadow-none mt-10">
            <!--begin::Card body-->
            <div class="card-body">
                <div class="d-flex align-items-sm-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-circle symbol-52px me-3">
                        <span class="symbol-label bg-light-primary">
                            <!--begin::Svg Icon-->
                            <span class="svg-icon svg-icon-2x svg-icon-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <circle fill="currentColor" opacity="0.3" cx="12" cy="12" r="10"/>
                                        <rect fill="currentColor" x="11" y="10" width="2" height="7" rx="1"/>
                                        <rect fill="currentColor" x="11" y="7" width="2" height="2" rx="1"/>
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Section-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="text-white text-hover-primary text-uppercase fs-7 fw-bold">Solicitar Informações</a>
                            <span class="text-gray-200 fw-semibold d-block fs-7">Peça aqui dados e informações sobre a Administração Pública.</span>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Col-->
@endsection

@section('scripts')
<script>
    // set the dropzone container id
    const id = "#kt_dropzone";
    const dropzone = document.querySelector(id);

    // set the preview element template
    var previewNode = dropzone.querySelector(".dropzone-item");
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);

    var myDropzone = new Dropzone(id, { // Make the whole body a dropzone
        url: "http://127.0.0.1:8000/manifestations/view", // Set the url for your upload script location
        parallelUploads: 20,
        maxFilesize: 1, // Max filesize in MB
        previewTemplate: previewTemplate,
        previewsContainer: id + " .dropzone-items", // Define the container to display the previews
        clickable: id + " .dropzone-select" // Define the element that should be used as click trigger to select files.
    });

    myDropzone.on("addedfile", function (file) {
        // Hookup the start button
        const dropzoneItems = dropzone.querySelectorAll('.dropzone-item');
        dropzoneItems.forEach(dropzoneItem => {
            dropzoneItem.style.display = '';
        });
    });

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
        const progressBars = dropzone.querySelectorAll('.progress-bar');
        progressBars.forEach(progressBar => {
            progressBar.style.width = progress + "%";
        });
    });

    myDropzone.on("sending", function (file) {
        // Show the total progress bar when upload starts
        const progressBars = dropzone.querySelectorAll('.progress-bar');
        progressBars.forEach(progressBar => {
            progressBar.style.opacity = "1";
        });
    });

    // Hide the total progress bar when nothing"s uploading anymore
    myDropzone.on("complete", function (progress) {
        const progressBars = dropzone.querySelectorAll('.dz-complete');

        setTimeout(function () {
            progressBars.forEach(progressBar => {
                progressBar.querySelector('.progress-bar').style.opacity = "0";
                progressBar.querySelector('.progress').style.opacity = "0";
            });
        }, 300);
    });
</script>
@endsection