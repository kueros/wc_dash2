@extends('layouts.app')

@section('template_title')
{{ $wooUsrMilo->name ?? __('Show') . " " . __('Woo Usr Milo') }}
@endsection

@section('content')
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
					<div class="float-left">
						<span class="card-title">{{ __('Show') }} Woo Usr Milo</span>
					</div>
					<div class="float-right">
						<a class="btn btn-primary btn-sm" href="/woo-usr-milos/index1/{{$wooUsrMilo->id_tienda}}"> {{ __('Back') }}</a>
					</div>
				</div>

				<div class="card-body bg-white">

					<div class="form-group mb-2 mb20">
						<strong>Id Tienda:</strong>
						{{ $wooUsrMilo->id_tienda }}
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