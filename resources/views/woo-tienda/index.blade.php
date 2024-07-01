@extends('layouts.app')

@section('template_title')
Woo Tiendas
@endsection

@section('content')
<?php #var_dump($woo_tiendas);die(); 
?>
<main class="main">
	<div class="container-fluid" id="app" :class="{'loading': loading}">
		<div class="modals">
			<v-dialog />
		</div>
		<div>
			<notifications position="bottom right" :duration="2000" />
		</div>
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<div style="display: flex; justify-content: space-between; align-items: left;">
							<table>
								<tr>
									<td>
										<strong>TIENDAS</strong>
									</td>
								</tr>
								<tr>
									<td>
										<a href="{{ url('woo-tiendas/create') }}" class="btn btn-warning btn-sm float-left" data-placement="left">
											{{ __('Crear Tienda') }}
										</a>
									</td>
									<td>
										<a href="{{ url('home') }}" class="btn btn-warning btn-sm float-left" data-placement="left">
											Volver
										</a>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="card-body">
						<div class="card-block">
							<table id="example" class="hover" style="width:100%">
								<thead>
									<th>Acciones</th>
									<th>Nombre</th>
									<th>Cuit</th>
									<th>Estado</th>
									<th>Fecha de Alta</th>
									<th>Fecha de Actualizacion</th>
								</thead>
								<tbody>
									@foreach ($data as $datos)
									<tr>
										<td>
											<div class="row no-gutters">
												<div class="col-auto">
													<form action="/woo-tiendas/destroy/<?php echo $datos->woo_id_tienda; ?>" method="POST">
														<a class="btn btn-sm btn-spinner btn-warning" href="{{ url('carriers/'.$datos->woo_id_tienda) }}" title="Carrier Services" role="button" style="margin-right: 5px;">
															<i class="fa fa-truck" aria-hidden="true"></i>&nbsp;Carrier Services
														</a>
														<a class="btn btn-sm btn-spinner btn-warning" href="/woo-tiendas/show/<?php echo $datos->woo_id_tienda; ?>" title="Webhooks" role="button" style="margin-right: 5px;">
															<i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Mostrar
														</a>
														<a class="btn btn-sm btn-warning" href="/woo-tiendas/edit/<?php echo $datos->woo_id_tienda; ?>"><i class="fa fa-fw fa-edit"></i> Editar</a>&nbsp;
														@csrf
														@method('DELETE')
														<button type="submit" class="btn btn-warning btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> Borrar</button>
													</form>
												</div>
											</div>
										</td>
										<td>{{ $datos->razon_social }}</td>
										<td>{{ $datos->cuit }}</td>
										<td>{{ $datos->activo }}</td>
										<td>{{ $datos->f_alta }}</td>
										<td>{{ $datos->f_update }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
		</store-listing>

		@endsection