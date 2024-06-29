@extends('layouts.app')

@section('template_title')
Woo Tiendas
@endsection

@section('content')
<?php #var_dump($data);die(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">

						<span id="card_title">
							TIENDAS
						</span>

						<div class="float-right">
							<a href="{{ url('woo_tiendas/create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
								{{ __('Create New') }}
							</a>
						</div>
					</div>
				</div>
				@if ($message = Session::get('success'))
				<div class="alert alert-success m-4">
					<p>{{ $message }}</p>
				</div>
				@endif

				<div class="card-body bg-white">
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead class="thead">
								<tr>
									<th>No</th>

									<th>Woo Id Tienda</th>
									<th>Razon Social</th>
									<th>Cuit</th>
									<th>Usr Api</th>
									<th>Psw Api</th>
									<th>F Alta</th>
									<th>F Update</th>
									<th>Id Tienda</th>
									<th>Prefijo</th>
									<th>Ck Tienda</th>
									<th>Cs Tienda</th>
									<th>Url Tienda</th>
									<th>Activo</th>

									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($wooTiendas as $wooTienda)
								<tr>
									<td>{{ ++$i }}</td>

									<td>{{ $wooTienda->woo_id_tienda }}</td>
									<td>{{ $wooTienda->razon_social }}</td>
									<td>{{ $wooTienda->cuit }}</td>
									<td>{{ $wooTienda->usr_api }}</td>
									<td>{{ $wooTienda->psw_api }}</td>
									<td>{{ $wooTienda->f_alta }}</td>
									<td>{{ $wooTienda->f_update }}</td>
									<td>{{ $wooTienda->id_tienda }}</td>
									<td>{{ $wooTienda->prefijo }}</td>
									<td>{{ $wooTienda->ck_tienda }}</td>
									<td>{{ $wooTienda->cs_tienda }}</td>
									<td>{{ $wooTienda->url_tienda }}</td>
									<td>{{ $wooTienda->activo }}</td>

									<td>
										<form action="{{ url('woo_tiendas/destroy', $wooTienda->id) }}" method="POST">
											<a class="btn btn-sm btn-primary " href="{{ url('woo-tiendas/show/'.$wooTienda->woo_id_tienda) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
											<a class="btn btn-sm btn-success" href="{{ url('woo_tiendas/edit', $wooTienda->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			{!! $wooTiendas->withQueryString()->links() !!}
		</div>
	</div>
</div>
@endsection