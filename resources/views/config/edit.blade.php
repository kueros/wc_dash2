@extends('layouts.app')

@section('template_title')
{{ __('Update') }} Config
@endsection

@section('content')
<section class="content container-fluid">
	<div class="">
		<div class="col-md-12">

			<div class="card card-default">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: left;">
						<table>
							<tr>
								<td>
									<strong>EDITAR CONFIGURACION</strong>
								</td>
							</tr>
							<tr>
								<td>
									<a href="{{ route('configs.index') }}" class="btn btn-warning btn-sm float-left" data-placement="left">
										Cancelar
									</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card-body bg-white">
					<form method="POST" action="/configupdate/<?php echo $configs->woo_id_tienda; ?>" role="form" enctype="multipart/form-data">
						{{ method_field('PATCH') }}
						@csrf

						@include('config.form')

					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection