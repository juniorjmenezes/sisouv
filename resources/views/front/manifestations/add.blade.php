@extends('front.layout._theme')

@section('content')
<!--begin::Row-->
<div class="row g-7">
    <!--begin::Col-->
    <div class="col-lg-8">
        <div class="card shadow-none">
            <div class="card-header">
                <!--begin::Title-->
                <div class="card-title fw-bold text-gray-900 text-uppercase gbr-font-1 fs-7">Faça sua Manifestação!</div>
                <!--end::Title-->
                <div class="card-toolbar">
                    <div class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault"/>
                        <label class="form-check-label text-uppercase gbr-font-1 fs-7" for="flexSwitchDefault">
                            Manifestação Anônima
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center rounded py-5 px-5 bg-light-primary">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                    <span class="svg-icon svg-icon-3x svg-icon-primary me-5">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                            <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
                            <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Description-->
                    <div class="text-gray-700 fw-semibold fs-6">Caso queira se identificar, preencha os dados pessoais no formulário abaixo. Você também pode optar por registrar um Manifesto Anônimo selecionando a opção acima.</div>
                    <!--end::Description-->
                </div>

                <div class="mt-10">
                    <div class="row mb-5">
                        <div class="col-lg-12 col-xl-12">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Digite seu nome completo..."/>
                        </div>
                    </div>
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
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="row mb-5">
                    <div class="col-lg-12 col-xl-6">
                        <label class="form-label">Direcionamento</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <label class="form-label">Natureza da Manifestação</label>
                        <input type="text" class="form-control form-control-solid" placeholder=""/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" id="kt_chat_messenger_footer">
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
                </div>
            </div>
        </div>
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">teste</div>
        </div>
    </div>
    <!--end::Col-->
@endsection

@section('scripts')
<script src="<?= asset('front/assets/plugins/custom/tinymce/tinymce.bundle.js') ?>"></script>
<script>
    var options = {selector: "#kt_docs_tinymce_basic", height : "260"};

    if ( KTThemeMode.getMode() === "dark" ) {
        options["skin"] = "oxide-dark";
        options["content_css"] = "dark";
    }

    tinymce.init(options);
</script>
@endsection