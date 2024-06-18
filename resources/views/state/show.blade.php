@extends('layouts.app')

@section('template_title')
{{ $state->name ?? __('Show') . " " . __('State') }}
@endsection

@section('content')
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
					<div class="float-left">
						<p class="float-left"><strong>MOSTRAR ESTADOS</strong></p><br />
						<a class="btn btn-warning btn-sm card-title" href="{{ url('states') }}"> {{ __('Volver') }}</a>
					</div>
				</div>

				<div class="card-body bg-white">

					<div class="form-group mb-2 mb20">
						<strong>State Iflow:</strong>
						{{ $state->state_iflow }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>State Sf:</strong>
						{{ $state->state_sf }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>State Final:</strong>
						{{ $state->state_final }}
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection