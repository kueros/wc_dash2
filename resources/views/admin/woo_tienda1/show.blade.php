@extends('layouts.app')

@section('template_title')
{{ $config->name ?? __('Show') . " " . __('Store') }}
@endsection

@section('content')
<?php #var_dump($store);die(); 
?>
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
					<div class="float-left">
						<span class="card-title">Mostrar Tienda</span>
					</div>
					<div class="float-right">
						<a class="btn btn-primary btn-sm" href="{{ route('woo_tiendas/index') }}"> {{ __('Back') }}</a>
					</div>
				</div>
				<div class="card-body bg-white">
					<div class="form-group mb-2 mb20">
						<strong>Nombre:</strong>
						{{ $store->razon_social }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Cuit:</strong>
						{{ $store->cuit }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Estado:</strong>
						{{ $store->activo }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>User API:</strong>
						{{ $store->usr_api }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Password API:</strong>
						{{ $store->psw_api }}
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
					<div class="float-left">
						<p class="float-left"><strong>MOSTRAR USUARIOS MILONGA</strong></p><br />
					</div>
				</div>
				<div class="card-body bg-white">

					<?php
					foreach ($milonga as $milonguita => $milo) {
					?>
						<div class="form-group mb-2 mb20">
							<strong>Usr Milo:</strong>
							{{ $milo->usr_milo }}
						</div>
						<div class="form-group mb-2 mb20">
							<strong>Psw Milo:</strong>
							{{ $milo->psw_milo }}
						</div>
						<div class="form-group mb-2 mb20">
							<strong>Customercode:</strong>
							{{ $milo->CustomerCode }}
						</div>
						<div class="form-group mb-2 mb20">
							<strong>Firstname:</strong>
							{{ $milo->FirstName }}
						</div>
						<div class="form-group mb-2 mb20">
							<strong>Lastname:</strong>
							{{ $milo->LastName }}
						</div>
						<div class="form-group mb-2 mb20">
							<strong>Telephone:</strong>
							{{ $milo->Telephone }}
						</div>
						<div class="form-group mb-2 mb20">
							<strong>Email:</strong>
							{{ $milo->Email }}
						</div>
						<div class="form-group mb-2 mb20">
							<a class="btn btn-sm btn-warning " href="/woo-usr-milos/index1/{{$milo->id_tienda}}"><i class="fa fa-fw fa-eye"></i> ABM de Usuarios Milonga</a>
						</div>
						<hr />
					<?php };
					?>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection