@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Bienvenidos')
@section('content_header_title', 'Inicio')
@section('content_header_subtitle', 'Bienvenidos')

{{-- Content body: main page content --}}

@section('content_body')
<div class="row" style="margin-top: 15px; ">
	<div class="col-lg-3 col-3">

		<div class="small-box bg-default">
			<div class="inner">
				<p>Ordenes del mes</p>
				<h4>3</h4>
			</div>
			<div class="icon">
				<i class="ion ion-bag"></i>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-3">

		<div class="small-box bg-default">
			<div class="inner">
				<p>Ordenes Creadas</p>
				<h4>5</h4>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-3">

		<div class="small-box bg-default">
			<div class="inner">
				<p>Ordenes Procesadas</p>
				<h4>12</h4>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-3">

		<div class="small-box bg-default">
			<div class="inner">
				<p>Ordenes no procesadas</p>
				<h4>3</h4>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
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