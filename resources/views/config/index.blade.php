@extends('layouts.app')

@section('template_title')
Configs
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">

						<span id="card_title">
							Configuracion
						</span>
					</div>
				</div>

				<div class="card-body bg-white">
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead class="thead">
								<tr>
									<th></th>
									<th>Nombre de la Tienda</th>
									<th>CUIT</th>
									<th>URL Secret</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<?php #echo $configs['woo_id_tienda']; #die(); 
										?>
										<a class="btn btn-sm btn-warning " href="/configshow/<?php echo $configs['woo_id_tienda']; ?>"><i class="fa fa-fw fa-eye"></i></a>
										<a class="btn btn-sm btn-warning" href="/configedit/<?php echo $configs['woo_id_tienda']; ?>"><i class=" fa fa-fw fa-edit"></i></a>
										@csrf
									</td>
									<td>{{ $configs['razon_social'] }}</td>
									<td>{{ $configs['cuit'] }}</td>
									<td>{{ $configs['url_tienda'] }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection