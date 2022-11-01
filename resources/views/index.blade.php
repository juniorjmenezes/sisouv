@extends('layout._app')

@section('content')
<div class="flex-column-fluid">
	<!--begin::Row-->
	<div class="row g-5 g-lg-8 mb-8 mb-xl-0">
		<!--begin::Col-->
		<div class="col-xl-6 mb-xl-8">
			<!--begin::Statistics Widget 1-->
			<div class="card card-flush bg-light border-0 h-xl-100">
				<!--begin::Header-->
				<div class="card-header px-10">
					<!--begin::Title-->
					<h3 class="card-title d-flex align-items-center">
						<span class="bullet bullet-line bg-success me-4"></span>
						<span class="card-label fw-bolder text-uppercase text-gray-900 fs-7">Faça sua manifestação</span>
					</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body p-10 pt-0">
					<p class="text-gray-800 fw-bold fs-7 mb-8">A Ouvidoria Digital recebe denúncias, solicitações, reclamações, elogios e sugestões. Iremos interagir com as áreas internas da administração municipal, visando a solução da dificuldade apresentada e a melhoria do serviço prestado.</p>
					<a href="/metronic8/demo11/../demo11/apps/contacts/add-contact.html" class="btn btn-sm btn-success text-uppercase fw-bold me-2">Nova manifestação</a>
				</div>
				<!--end::Body-->
			</div>
			<!--end::Statistics Widget 1-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-xl-6 mb-xl-8">
			<!--begin::Statistics Widget 1-->
			<div class="card card-flush h-xl-100">
				<!--begin::Header-->
				<div class="card-header px-10">
					<!--begin::Title-->
					<h3 class="card-title d-flex align-items-center">
						<span class="bullet bullet-line bg-success me-4"></span>
						<span class="card-label fw-bolder text-uppercase text-gray-900 fs-7">Acompanhar manifestação</span>
					</h3>
					<!--end::Title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body p-10 pt-0">
					<p class="text-gray-800 fw-bold fs-7 mb-8">É possível acompanhar sua manifestação com poucos cliques. Para isso, insira nos campos abaixo o Protocolo e Senha recebidos no ato da abertura de sua Manifestação.</p>
					<!--begin::Input group-->
					<div class="input-group input-group-sm">
						<input type="text" class="form-control form-control-sm text-uppercase" placeholder="Protocolo" aria-label="Protocolo"/>
						<input type="password" class="form-control form-control-sm text-uppercase" placeholder="Senha" aria-label="Senha"/>
						<button type="submit" class="btn btn-sm btn-success text-uppercase fw-bold">Acompanhar</button>
					</div>
					<!--end::Input group-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Statistics Widget 1-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
	<!--begin::Row-->
	<div class="row g-5 g-lg-8 mb-8 mb-xl-0">
		<!--begin::Col-->
		<div class="col-xl-12 mb-xl-8">
			<!--begin::Statistics Widget 1-->
			<div class="card card-flush h-xl-100">
				<!--begin::Header-->
				<div class="card-header px-10 pt-5">
					<!--begin::Title-->
					<h3 class="card-title d-flex align-items-center">
						<span class="bullet bullet-line bg-success me-4"></span>
						<span class="card-label fw-bolder text-uppercase text-gray-900 fs-7">Estatísticas de Ouvidoria</span>
					</h3>
					<!--end::Title-->
					<!--begin::Toolbar-->
					<div class="card-toolbar">
						<a href="/metronic8/demo11/../demo11/apps/contacts/add-contact.html" class="btn btn-sm btn-light text-uppercase fw-bold">Painel</a>
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body p-10 pt-0">
					<div class="row g-5 g-lg-8 mb-8 mb-xl-0 pt-5">
						<!--begin::Col-->
						<div class="col-xl-3">
							<div class="card border-0 bg-light">
								<div class="card-body p-5">
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-white">
												<!--begin::Font Icon-->
												<i class="lar la-comments text-gray-600 fs-2x"></i>
												<!--end::Font Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-2hx fw-normal text-dark me-2 lh-1 ls-n2">200</div>
											<div class="fs-7 text-gray-600 fw-bold">Manifestações Arquivadas</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xl-3">
							<div class="card border-0 bg-light">
								<div class="card-body p-5">
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-white">
												<!--begin::Font Icon-->
												<i class="lar la-comments text-primary fs-2x"></i>
												<!--end::Font Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-2hx fw-normal text-dark me-2 lh-1 ls-n2">2000</div>
											<div class="fs-7 text-gray-600 fw-bold">Manifestações Válidas</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xl-3">
							<div class="card border-0 bg-light">
								<div class="card-body p-5">
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-white">
												<!--begin::Font Icon-->
												<i class="lar la-comments text-warning fs-2x"></i>
												<!--end::Font Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-2hx fw-normal text-dark me-2 lh-1 ls-n2">300</div>
											<div class="fs-7 text-gray-600 fw-bold">Manifestações Abertas</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xl-3">
							<div class="card border-0 bg-light">
								<div class="card-body p-5">
									<div class="d-flex align-items-center me-2">
										<!--begin::Symbol-->
										<div class="symbol symbol-50px me-3">
											<div class="symbol-label bg-white">
												<!--begin::Font Icon-->
												<i class="lar la-comments text-success fs-2x"></i>
												<!--end::Font Icon-->
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div>
											<div class="fs-2hx fw-normal text-dark me-2 lh-1 ls-n2">1700</div>
											<div class="fs-7 text-gray-600 fw-bold">Manifestações Fechadas</div>
										</div>
										<!--end::Title-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Col-->
					</div>
				</div>
				<!--end::Body-->
			</div>
			<!--end::Statistics Widget 1-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
</div>
@endsection

@section('scripts')

@endsection