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
						<strong>Url Create Order:</strong>
						{{ $config->url_create_order }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Url Create Order Milonga:</strong>
						{{ $config->url_create_order_milo }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Url Rate:</strong>
						{{ $config->url_rate }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Url Cancel Order:</strong>
						{{ $config->url_cancel_order }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Url Cancel Order Milonga:</strong>
						{{ $config->url_cancel_order_milo }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Url Logistica Inversa:</strong>
						{{ $config->url_logistica_inversa }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Url Download:</strong>
						{{ $config->url_download }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Shipping ID:</strong>
						{{ $config->shipping_id }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Key Sipping ID:</strong>
						{{ $config->key_shipping_id }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Path Log:</strong>
						{{ $config->path_log }}
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection