@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Bienvenidos')
@section('content_header_title', 'Inicio')
@section('content_header_subtitle', 'Bienvenidos')
<link href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" rel="stylesheet">

{{-- Content body: main page content --}}

@section('content_body')
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
							<div class="card-header"><i class="fa fa-align-justify"></i> Ordenes
							</div>							
							<div class="card-body">
								<div class="card-block">
									<table id="example" class="display nowrap" style="width:100%">
										<thead>
											<th>Acciones</th>
											<th>Id</th>
											<th>Store</th>
											<th>Tracking_id</th>
											<th>Estado</th>
											<th>Fecha_creacion</th>
											<th>Shipment_id</th>
											<th>Print url</th>
										</thead>
										<tbody>
											@foreach ($data as $datos)
											<tr>
												<?php #dd($datos); ?>
												<td>
													<div class="col-auto">
														<a class="btn btn-sm btn-spinner btn-warning" href="{{ url('orders_detail/'.$datos->order_id) }}" title="Carrier Services" role="button">
															<i class="fa fa-eye" aria-hidden="true"></i>
														</a>
													</div>
												</td>
												<td>{{ $datos->order_id }}</td>
												<td>{{ $datos->store }}</td>
												<td>{{ $datos->tracking_id }}</td>
												<td>{{ $datos->financial_status }}</td>
												<td>{{ $datos->fecha_creacion }}</td>
												<td>{{ $datos->shipment_id }}</td>
												<td>{{ $datos->print_url }}</td>
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


				@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
	<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js" crossorigin="anonymous"></script>
	<script type="text/javascript">
		new DataTable('#example');
	</script>
	@endpush

