@extends('layouts.app')

@section('content')
<?php #echo $wooUsrMilo;die(); 
?>
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: left;">
						<table>
							<tr>
								<td>
									<strong>MOSTRAR USUARIOS DE MILONGA</strong>
								</td>
							</tr>
							<tr>
								<td>
									<a href="javascript:history.back();" class="btn btn-warning btn-sm float-left" data-placement="left">
										{{ __('Volver') }}
									</a>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="card-body bg-white">

					<div class="form-group mb-2 mb20">
						<strong>Nombre Tienda:</strong>
						{{ $wooUsrMilo->razon_social }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Usr Milo:</strong>
						{{ $wooUsrMilo->usr_milo }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Psw Milo:</strong>
						{{ $wooUsrMilo->psw_milo }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Customercode:</strong>
						{{ $wooUsrMilo->CustomerCode }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Firstname:</strong>
						{{ $wooUsrMilo->FirstName }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Lastname:</strong>
						{{ $wooUsrMilo->LastName }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Telephone:</strong>
						{{ $wooUsrMilo->Telephone }}
					</div>
					<div class="form-group mb-2 mb20">
						<strong>Email:</strong>
						{{ $wooUsrMilo->Email }}
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection