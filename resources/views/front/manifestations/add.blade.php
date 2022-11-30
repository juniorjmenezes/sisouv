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
                <div class="card-title fw-bold text-gray-900 text-uppercase fs-7">Faça sua Manifestação!</div>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <div class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault"/>
                        <label class="form-check-label text-uppercase fs-7" for="flexSwitchDefault">
                            Manifestação Anônima
                        </label>
                    </div>
                </div>
                <!--begin::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Row-->
                <div class="row mb-5">
                    <div class="col-lg-12 col-xl-12">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control form-control-solid" placeholder="Digite seu nome completo..."/>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-5">
                    <div class="col-lg-12 col-xl-4">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <label class="form-label">Grau de Instrução</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <label class="form-label">Sexo</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-5">
                    <div class="col-lg-12 col-xl-8">
                        <label class="form-label">Logradouro</label>
                        <input type="text" class="form-control form-control-solid" placeholder="Avenida, Rua, Travessa..."/>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <label class="form-label">Número</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-5">
                    <div class="col-lg-12 col-xl-4">
                        <label class="form-label">Bairro</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <label class="form-label">Estado</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <label class="form-label">Município</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                    <div class="col-lg-12 col-xl-8">
                        <label class="form-label">E-mail</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <label class="form-label">Telefone Celular</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-10"></div>
                <!--end::Separator-->
                <!--begin::Row-->
                <div class="row mb-5">
                    <!--begin::Col-->
                    <div class="col-lg-12 col-xl-6">
                        <label class="form-label">Direcionamento</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-12 col-xl-6">
                        <label class="form-label">Natureza da Manifestação</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-lg-12">
                        <!--begin::Input-->
                        <label class="form-label">Mensagem</label>
                        <textarea class="form-control form-control-solid mb-10" rows="5" data-kt-element="input" placeholder="Seja o mais claro e objetivo possível."></textarea>
                        <!--end::Input-->
                        <!--begin:Toolbar-->
                        <div class="d-flex flex-stack">
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center me-2">
                                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="Coming soon" data-bs-original-title="Coming soon" data-kt-initialized="1">
                                    <i class="bi bi-paperclip fs-3"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="Coming soon" data-bs-original-title="Coming soon" data-kt-initialized="1">
                                    <i class="bi bi-upload fs-3"></i>
                                </button>
                            </div>
                            <!--end::Actions-->
                            <!--begin::Send-->
                            <button class="btn btn-sm btn-primary text-uppercase" type="button" data-kt-element="send">Enviar</button>
                            <!--end::Send-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Row-->  
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
                <div class="card-title fw-bold text-gray-900 text-uppercase fs-7">Aqui você pode manifestar:</div>
                <!--end::Title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">
                <div class="d-flex align-items-sm-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-circle symbol-52px me-3">
                        <span class="symbol-label bg-light-success">
                            <!--begin::Svg Icon-->
                            <span class="svg-icon svg-icon-2x svg-icon-success">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="currentColor" opacity="0.3" x="2" y="2" width="20" height="20" rx="10"/>
                                        <path d="M6.16794971,14.5547002 C5.86159725,14.0951715 5.98577112,13.4743022 6.4452998,13.1679497 C6.90482849,12.8615972 7.52569784,12.9857711 7.83205029,13.4452998 C8.9890854,15.1808525 10.3543313,16 12,16 C13.6456687,16 15.0109146,15.1808525 16.1679497,13.4452998 C16.4743022,12.9857711 17.0951715,12.8615972 17.5547002,13.1679497 C18.0142289,13.4743022 18.1384028,14.0951715 17.8320503,14.5547002 C16.3224187,16.8191475 14.3543313,18 12,18 C9.64566871,18 7.67758127,16.8191475 6.16794971,14.5547002 Z" fill="currentColor"/>
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
                            <a href="#" class="text-gray-800 text-hover-primary text-uppercase fs-7 fw-bold gbr-font-1">Elogio</a>
                            <span class="text-gray-600 fw-semibold d-block fs-7">Reconhecimento ou satisfação sobre o serviço oferecido ou atendimento recebido.</span>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <div class="separator separator-dashed my-5"></div>
                <div class="d-flex align-items-sm-center">
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
                            <a href="#" class="text-gray-800 text-hover-primary text-uppercase fs-7 fw-bold gbr-font-1">Denúncia</a>
                            <span class="text-gray-600 fw-semibold d-block fs-7">Reconhecimento ou satisfação sobre o serviço oferecido ou atendimento recebido.</span>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <div class="separator separator-dashed my-5"></div>
                <div class="d-flex align-items-sm-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-circle symbol-52px me-3">
                        <span class="symbol-label bg-light-warning">
                            <!--begin::Svg Icon-->
                            <span class="svg-icon svg-icon-2x svg-icon-warning">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <circle fill="currentColor" opacity="0.3" cx="12" cy="12" r="10"/>
                                        <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="currentColor"/>
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
                            <a href="#" class="text-gray-800 text-hover-primary text-uppercase fs-7 fw-bold gbr-font-1">Reclamação</a>
                            <span class="text-gray-600 fw-semibold d-block fs-7">Reconhecimento ou satisfação sobre o serviço oferecido ou atendimento recebido.</span>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <div class="separator separator-dashed my-5"></div>
                <div class="d-flex align-items-sm-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-circle symbol-52px me-3">
                        <span class="symbol-label bg-light-info">
                            <!--begin::Svg Icon-->
                            <span class="svg-icon svg-icon-2x svg-icon-info">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <circle fill="currentColor" opacity="0.3" cx="12" cy="12" r="10"/>
                                        <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="currentColor" fill-rule="nonzero"/>
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
                            <a href="#" class="text-gray-800 text-hover-primary text-uppercase fs-7 fw-bold gbr-font-1">Sugestão</a>
                            <span class="text-gray-600 fw-semibold d-block fs-7">Reconhecimento ou satisfação sobre o serviço oferecido ou atendimento recebido.</span>
                        </div>
                    </div>
                    <!--end::Section-->
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
                            <a href="#" class="text-white text-hover-primary text-uppercase fs-7 fw-bold gbr-font-1">Solicitar Informações</a>
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

@endsection