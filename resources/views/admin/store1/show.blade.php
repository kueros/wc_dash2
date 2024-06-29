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
						<a class="btn btn-warning btn-sm card-title" href="{{ route('woo_tiendas/index') }}"> {{ __('Volver') }}</a>
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
						<strong>Cli ID:</strong>
						{{ $store->cli_id }}
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php #var_dump($milonga);die(); 
	#if ($milo ?? null) {
	#	echo "asfasdf". $milo;
	#} else {
	?>
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
	<?php #};
	?>

</section>
@endsection