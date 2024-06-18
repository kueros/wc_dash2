@extends('layouts.app')

@section('template_title')
{{ $user->name ?? __('Show') . " " . __('User2') }}
@endsection

@section('content')
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
					<div class="float-left">
						<p class="float-left"><strong>MOSTRAR USUARIOS</strong></p><br />
						<a class="btn btn-warning btn-sm card-title" href="{{ url('users') }}"> {{ __('Volver') }}</a>
					</div>
				</div>
			</div>

			<div class="card-body bg-white">

				<div class="form-group mb-2 mb20">
					<strong>Apellido:</strong>
					{{ $user->apellido }}
				</div>
				<div class="form-group mb-2 mb20">
					<strong>Name:</strong>
					{{ $user->name }}
				</div>
				<div class="form-group mb-2 mb20">
					<strong>Email:</strong>
					{{ $user->email }}
				</div>
				<div class="form-group mb-2 mb20">
					<strong>Estado:</strong>
					{{ $user->estado }}
				</div>

			</div>
		</div>
	</div>
	</div>
</section>
@endsection