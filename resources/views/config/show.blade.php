@extends('layouts.app')

@section('template_title')
{{ $config->name ?? __('Show') . " " . __('Config') }}
@endsection

@section('content')
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
					<div class="float-left">
						<p class="float-left"><strong>MOSTRAR CONFIGURACIONES</strong></p><br />
						<a class="btn btn-warning btn-sm card-title" href="{{ url('configs') }}"> {{ __('Volver') }}</a>
					</div>
				</div>
				<div class="card-body bg-white">
					<div class="form-group mb-2 mb20">
						<strong>Url Root:</strong>
						{{ $config->urlroot }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Shopify Client Id:</strong>
						{{ $config->cli_id }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Shopify Client Secret:</strong>
						{{ $config->cli_pass }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Url de Redirección:</strong>
						{{ $config->re_dir_url }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Fi Logs:</strong>
						{{ $config->fi_logs }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Scope:</strong>
						{{ $config->scope }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Callback Url Carrier:</strong>
						{{ $config->callback_url_carrier }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Webhook Address Orders Create:</strong>
						{{ $config->webhook_address_orders_create }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Webhook Address Orders Paid:</strong>
						{{ $config->webhook_address_orders_paid }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Webhook Address Orders Cancelled:</strong>
						{{ $config->webhook_address_orders_cancelled }}
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection