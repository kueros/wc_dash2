@extends('layouts.app')

@section('template_title')
Usuarios
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">

						<span id="card_title">
							{{ __('Usuarios') }}
						</span>

						<!--div class="float-right">
							<a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
								{{ __('Create New') }}
							</a>
						</div-->
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
									<th>Acciones</th>
									<th>Name</th>
									<th>Apellido</th>
									<th>Estado</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $user)
								<tr>
									<td>
										<a class="btn btn-sm btn-warning " href="{{ route('users.show', $user->id) }}"><i class="fa fa-fw fa-eye"></i></a>
									</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->apellido }}</td>
									<td>{{ $user->estado }}</td>
									<td>{{ $user->email }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			{!! $users->withQueryString()->links() !!}
		</div>
	</div>
</div>
@endsection