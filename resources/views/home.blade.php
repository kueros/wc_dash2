@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Bienvenidos')
@section('content_header_title', 'Inicio')
@section('content_header_subtitle', 'Bienvenidos')

{{-- Content body: main page content --}}

@section('content_body')
<div class="row">
	<div class="col-lg-3 col-3">

		<div class="small-box bg-default">
			<div class="inner">
				<h3>3</h3>
				<p>Ordenes del mes1</p>
			</div>
			<div class="icon">
				<i class="ion ion-bag"></i>
			</div>
			<a href="http://localhost:8000/iflow_orders_data" class="small-box-footer">Ir a Ordenes <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>

	<div class="col-lg-3 col-3">

		<div class="small-box bg-default">
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

	<div class="col-lg-3 col-3">

		<div class="small-box bg-default">
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

	<div class="col-lg-3 col-3">

		<div class="small-box bg-default">
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