@extends('layouts.app')

@section('template_title')
{{ __('Update') }} Woo Tienda
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
									<strong>EDITAR TIENDA</strong>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card-body bg-white">
					<form method="POST" action="/woo-tiendas/update/<?php echo $woo_tiendas->woo_id_tienda; ?>" role="form" enctype="multipart/form-data">
						{{ method_field('PATCH') }}
						@csrf

						@include('woo-tienda.form')

					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection