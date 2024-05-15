@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Bienvenidos')
@section('content_header_title', 'Inicio')
@section('content_header_subtitle', 'Bienvenidos')

{{-- Content body: main page content --}}

@section('content_body')
<div class="row">
	<div class="col-lg-3 col-6">
		<div class="small-box bg-info">
			<div class="inner">
				<h3>3</h3>
				<p>Ordenes del mes</p>
			</div>
			<div class="icon">
				<i class="ion ion-bag"></i>
			</div>
			<a href="http://localhost:8000/iflow_orders_data" class="small-box-footer">Ir a Ordenes <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>

	<div class="col-lg-3 col-6">
		<div class="small-box bg-success">
			<div class="inner">
				<h3>5<sup style="font-size: 20px">%</sup></h3>
				<p>Ordenes Creadas</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="http://localhost:8000/iflow_orders_data" class="small-box-footer">Ir a Ordenes <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>

	<div class="col-lg-3 col-6">
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>12</h3>
				<p>Ordenes Procesadas</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="http://localhost:8000/iflow_orders_data" class="small-box-footer">Ir a Ordenes <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<div class="small-box bg-dangerå">
			<div class="inner">
				<h3>3</h3>
				<p>Ordenes no procesadas</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
			<a href="http://localhost:8000/iflow_orders_data" class="small-box-footer">Ir a Ordenes <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>

	<div class="card">
		<div class="card-header border-transparent">
			<h3 class="card-title">Latest Orders</h3>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse">
					<i class="fas fa-minus"></i>
				</button>
				<button type="button" class="btn btn-tool" data-card-widget="remove">
					<i class="fas fa-times"></i>
				</button>
			</div>
		</div>
	</div>
	<div class="card-body p-0">
		<div class="table-responsive">
			<table class="table m-0">
				<thead>
					<tr>
						<th>Order ID</th>
						<th>Item</th>
						<th>Status</th>
						<th>Popularity</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="pages/examples/invoice.html">OR9842</a></td>
						<td>Call of Duty IV</td>
						<td><span class="badge badge-success">Shipped</span></td>
						<td>
							<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR1848</a></td>
						<td>Samsung Smart TV</td>
						<td><span class="badge badge-warning">Pending</span></td>
						<td>
							<div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR7429</a></td>
						<td>iPhone 6 Plus</td>
						<td><span class="badge badge-danger">Delivered</span></td>
						<td>
							<div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR7429</a></td>
						<td>Samsung Smart TV</td>
						<td><span class="badge badge-info">Processing</span></td>
						<td>
							<div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR1848</a></td>
						<td>Samsung Smart TV</td>
						<td><span class="badge badge-warning">Pending</span></td>
						<td>
							<div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR7429</a></td>
						<td>iPhone 6 Plus</td>
						<td><span class="badge badge-danger">Delivered</span></td>
						<td>
							<div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR9842</a></td>
						<td>Call of Duty IV</td>
						<td><span class="badge badge-success">Shipped</span></td>
						<td>
							<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>

	<div class="card-footer clearfix">
		<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
		<a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
	</div>


</div>@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
<script>
	console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@endpush