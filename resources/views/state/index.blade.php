@extends('layouts.app')

@section('template_title')
States
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<div style=" justify-content: space-between; align-items: center;">
						<p id="card_title">
							{{ __('Estados') }}
						</p>
						<div class="float-left">
							<a href="{{ route('states.create') }}" class="btn btn-warning btn-sm float-left" data-placement="left">
								{{ __('Nuevo') }}
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
									<th></th>
									<th>Estado Iflow</th>
									<th>Estado Sf</th>
									<th>Estado Final</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($states as $state)
								<tr>
									<td>
										<form action="{{ route('states.destroy', $state->id) }}" method="POST">
											<a class="btn btn-sm btn-warning " href="{{ route('states.show', $state->id) }}"><i class="fa fa-fw fa-eye"></i></a>
											<a class="btn btn-sm btn-warning" href="{{ route('states.edit', $state->id) }}"><i class="fa fa-fw fa-edit"></i></a>
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-warning btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i></button>
										</form>
									</td>
									<td>{{ $state->state_iflow }}</td>
									<td>{{ $state->state_sf }}</td>
									<td>{{ $state->state_final }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			{!! $states->withQueryString()->links() !!}
		</div>
	</div>
</div>
@endsection