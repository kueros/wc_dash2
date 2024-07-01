@extends('layouts.app')

@section('template_title')
Woo Usr Milos
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: left;">
						<table>
							<tr>
								<td>
									<strong>USUARIOS DE MILONGA</strong>
								</td>
							</tr>
							<tr>
								<td>
									<a href="{{ route('woo-tiendasindex') }}" class="btn btn-warning btn-sm float-left" data-placement="left">
										{{ __('Volver') }}
									</a>
								</td>
							</tr>
						</table>
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
									<th>Nombre Tienda</th>
									<th>Usr Milonga</th>
									<th>Psw Milonga</th>
									<th>Customer code</th>
									<th>First name</th>
									<th>Last name</th>
									<th>Telephone</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($wooUsrMilos as $wooUsrMilo)
								<tr>
									<td>
										<form action="{{ route('woo-usr-milos.destroy', $wooUsrMilo->id) }}" method="POST">
											<a class="btn btn-sm btn-warning " href="{{ route('woo-usr-milos.show', $wooUsrMilo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
											<a class="btn btn-sm btn-warning" href="{{ route('woo-usr-milos.edit', $wooUsrMilo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-warning btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
										</form>
									</td>
									<td>{{ $wooUsrMilo->razon_social }}</td>
									<td>{{ $wooUsrMilo->usr_milo }}</td>
									<td>{{ $wooUsrMilo->psw_milo }}</td>
									<td>{{ $wooUsrMilo->CustomerCode }}</td>
									<td>{{ $wooUsrMilo->FirstName }}</td>
									<td>{{ $wooUsrMilo->LastName }}</td>
									<td>{{ $wooUsrMilo->Telephone }}</td>
									<td>{{ $wooUsrMilo->Email }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection