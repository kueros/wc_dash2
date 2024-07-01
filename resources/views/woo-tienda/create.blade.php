@extends('layouts.app')

@section('template_title')
{{ __('Create') }} Woo Tienda
@endsection

@section('content')
<?php #var_dump($woo_tiendas);die(); 
?>
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-12">

			<div class="card card-default">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: left;">
						<table>
							<tr>
								<td>
									<strong>CREAR TIENDAS</strong>
								</td>
							</tr>
							<tr>
								<td>
									<a href="{{ route('woo-tiendasindex') }}" class="btn btn-warning btn-sm float-left" data-placement="left">
										Cancelar
									</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card-body bg-white">
					<form method="POST" action="http://localhost:8000/woo-tiendas-store" role="form" enctype="multipart/form-data">
						@csrf
						@include('woo-tienda.form')
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection