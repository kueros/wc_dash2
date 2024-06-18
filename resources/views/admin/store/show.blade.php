@extends('layouts.app')

@section('template_title')
{{ $config->name ?? __('Show') . " " . __('Store') }}
@endsection

@section('content')
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
					<div class="float-left">
						<p class="float-left"><strong>MOSTRAR TIENDA</strong></p><br />
						<a class="btn btn-warning btn-sm card-title" href="{{ route('stores/index') }}"> {{ __('Back') }}</a>
					</div>
				</div>
				<div class="card-body bg-white">
					<div class="form-group mb-2 mb20">
						<strong>Nombre:</strong>
						{{ $store->shop }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Cuit:</strong>
						{{ $store->cuit }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Estado:</strong>
						{{ $store->state }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Token:</strong>
						{{ $store->token }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Shopify Cli ID:</strong>
						{{ $store->cli_id }}
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection