@extends('front.layout._theme')

@section('content')
	<!--begin::Row-->
	<div class="row g-5 g-xl-10 mb-5 mb-xl-0">
		<!--begin::Col-->
		<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
			<!--begin::Card-->
			<div class="card shadow-none">
				<!--begin::Card body-->
				<div class="card-body">
					<!--begin::Title-->
					<div class="card-title fw-bold text-gray-900 text-uppercase fs-7">Faça sua Manifestação</div>
					<!--end::Title-->
					<!--begin::Separator-->
					<div class="separator border-secondary w-100px mb-6"></div>
					<!--end::Separator-->
					<!--begin::Text-->
					<p class="fw-normal text-gray-800 fs-6">
						A Prefeitura escuta você. Registre solicitações, reclamações, sugestões ou elogios. É possível também denunciar algo de errado sem precisar se identificar.
					</p>
					<!--end::Text-->
					<div class="d-flex flex-column flex-sm-row d-grid gap-2 mt-8">
						<!--begin::Button-->
						<a href="#" class="btn btn-sm btn-primary text-uppercase flex-shrink-0 me-lg-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Registrar Nova Manifestação</a>
						<!--end::Button-->
					</div>
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
		</div>
		<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
			<!--begin::Card-->
			<div class="card shadow-none">
				<!--begin::Card body-->
				<div class="card-body">
					<!--begin::Title-->
					<div class="card-title fw-bold text-gray-900 text-uppercase fs-7">Acompanhar Manifestação</div>
					<!--end::Title-->
					<!--begin::Separator-->
					<div class="separator border-secondary w-100px mb-6"></div>
					<!--end::Separator-->
					<!--begin::Title-->
					<p class="fw-normal text-gray-800 fs-6">
						Com algumas informações básicas, obtidas no momento da abertura (Número de Protocolo e Senha) é possível acessar o status de sua Manifestação.
					</p>
					<!--end::Title-->
					<!--begin::Input group-->
					<div class="input-group input-group-solid input-group-sm mt-8">
						<input type="text" class="form-control form-control-sm text-uppercase" id="protocol-number"  placeholder="Protocolo" aria-describedby="basic-addon3"/>
						<input type="text" class="form-control form-control-sm text-uppercase" id="protocol-password"  placeholder="Senha" aria-describedby="basic-addon3"/>
						<!--begin::Button-->
						<button class="btn btn-sm btn-primary text-uppercase" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Acompanhar</button>
						<!--end::Button-->
					</div>
					<!--end::Input group-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	<div class="row g-5 g-xl-10">
		<!--begin::Col-->
		<div class="col-xl-12 mb-md-5 mb-xl-10">
			<!--begin::Card-->
			<div class="card bg-light-primary shadow-none">
				<!--begin::Card body-->
				<div class="card-body">
					<!--begin::Title-->
					<div class="card-title fw-bold text-gray-900 text-uppercase fs-7">Estatísticas de Ouvidoria</div>
					<!--end::Title-->
					<!--begin::Separator-->
					<div class="separator border-primary w-100px mb-6"></div>
					<!--end::Separator-->
					<!--begin::Text-->
					<p class="fw-normal text-gray-800 fs-6">
						Consulte as estatísticas e os dados sobre os tipos de manifestações de Ouvidoria realizadas por cidadãos desde março de 2018.
					</p>
					<!--end::Text-->
					<!--begin::Row-->
					<div class="row mt-8">
						<!--begin::Col-->
						<div class="col-xl-3 col-sm-3 mb-5 mb-xl-0">
							<!--begin::Card-->
							<div class="card bg-primary">
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin::Statistics-->
									<div class="d-flex align-items-center mb-2">
										<!--begin::Value-->
										<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">2.300</span>
										<!--end::Value-->
									</div>
									<!--end::Statistics-->
									<!--begin::Description-->
									<span class="fs-6 fw-semibold text-white">Manifestações Válidas</span>
									<!--end::Description-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xl-3 col-sm-3 mb-5 mb-xl-0">
							<!--begin::Card-->
							<div class="card bg-primary">
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin::Statistics-->
									<div class="d-flex align-items-center mb-2">
										<!--begin::Value-->
										<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">68%</span>
										<!--end::Value-->
									</div>
									<!--end::Statistics-->
									<!--begin::Description-->
									<span class="fs-6 fw-semibold text-white">Manifestações Atendidas</span>
									<!--end::Description-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xl-3 col-sm-3 mb-5 mb-xl-0">
							<!--begin::Card-->
							<div class="card bg-primary">
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin::Statistics-->
									<div class="d-flex align-items-center mb-2">
										<!--begin::Value-->
										<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">90%</span>
										<!--end::Value-->
									</div>
									<!--end::Statistics-->
									<!--begin::Description-->
									<span class="fs-6 fw-semibold text-white">Manifestações Atendidas no Prazo</span>
									<!--end::Description-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xl-3 col-sm-3">
							<!--begin::Card-->
							<div class="card bg-primary">
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin::Statistics-->
									<div class="d-flex align-items-center mb-2">
										<!--begin::Value-->
										<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">2%</span>
										<!--end::Value-->
									</div>
									<!--end::Statistics-->
									<!--begin::Description-->
									<span class="fs-6 fw-semibold text-white">Reclamações</span>
									<!--end::Description-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Col-->
					</div>
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	<div class="row g-5 g-xl-10">
		<!--begin::Col-->
		<div class="col-xl-6 mb-md-5 mb-xl-10">
			<div class="card card-flush">
				<div class="card-body">
					<!--begin::Title-->
					<div class="card-title fw-bold text-gray-900 text-uppercase fs-7">Canais de Atendimento</div>
					<!--end::Title-->
					<!--begin::Separator-->
					<div class="separator border-secondary w-100px mb-6"></div>
					<!--end::Separator-->
					<!--begin::Text-->
					<p class="fw-normal text-gray-800 fs-6">
						Converse, seja parte do governo e faça valer o seu direito de cidadão.
					</p>
					<!--end::Text-->
				</div>
			</div>
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
@endsection

@section('scripts')

@endsection