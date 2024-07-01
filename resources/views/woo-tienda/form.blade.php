<div class="row padding-1 p-1">
    <div class="col-md-12">

	<div class="form-group mb-2 mb20">
            <label for="razon_social" class="form-label">{{ __('Razon Social') }}</label>
            <input type="text" name="razon_social" class="form-control @error('razon_social') is-invalid @enderror" value="{{ old('razon_social', $woo_tiendas?->razon_social) }}" id="razon_social" placeholder="Razon Social">
            {!! $errors->first('razon_social', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cuit" class="form-label">{{ __('Cuit') }}</label>
            <input type="text" name="cuit" class="form-control @error('cuit') is-invalid @enderror" value="{{ old('cuit', $woo_tiendas?->cuit) }}" id="cuit" placeholder="Cuit">
            {!! $errors->first('cuit', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="usr_api" class="form-label">{{ __('Usr Api') }}</label>
            <input type="text" name="usr_api" class="form-control @error('usr_api') is-invalid @enderror" value="{{ old('usr_api', $woo_tiendas?->usr_api) }}" id="usr_api" placeholder="Usr Api">
            {!! $errors->first('usr_api', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="psw_api" class="form-label">{{ __('Psw Api') }}</label>
            <input type="text" name="psw_api" class="form-control @error('psw_api') is-invalid @enderror" value="{{ old('psw_api', $woo_tiendas?->psw_api) }}" id="psw_api" placeholder="Psw Api">
            {!! $errors->first('psw_api', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="f_alta" class="form-label">{{ __('F Alta') }}</label>
            <input type="text" name="f_alta" class="form-control @error('f_alta') is-invalid @enderror" value="{{ old('f_alta', $woo_tiendas?->f_alta) }}" id="f_alta" placeholder="F Alta">
            {!! $errors->first('f_alta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="f_update" class="form-label">{{ __('F Update') }}</label>
            <input type="text" name="f_update" class="form-control @error('f_update') is-invalid @enderror" value="{{ old('f_update', $woo_tiendas?->f_update) }}" id="f_update" placeholder="F Update">
            {!! $errors->first('f_update', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_tienda" class="form-label">{{ __('Id Tienda') }}</label>
            <input type="text" name="id_tienda" class="form-control @error('id_tienda') is-invalid @enderror" value="{{ old('id_tienda', $woo_tiendas?->id_tienda) }}" id="id_tienda" placeholder="Id Tienda">
            {!! $errors->first('id_tienda', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="prefijo" class="form-label">{{ __('Prefijo') }}</label>
            <input type="text" name="prefijo" class="form-control @error('prefijo') is-invalid @enderror" value="{{ old('prefijo', $woo_tiendas?->prefijo) }}" id="prefijo" placeholder="Prefijo">
            {!! $errors->first('prefijo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ck_tienda" class="form-label">{{ __('Ck Tienda') }}</label>
            <input type="text" name="ck_tienda" class="form-control @error('ck_tienda') is-invalid @enderror" value="{{ old('ck_tienda', $woo_tiendas?->ck_tienda) }}" id="ck_tienda" placeholder="Ck Tienda">
            {!! $errors->first('ck_tienda', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cs_tienda" class="form-label">{{ __('Cs Tienda') }}</label>
            <input type="text" name="cs_tienda" class="form-control @error('cs_tienda') is-invalid @enderror" value="{{ old('cs_tienda', $woo_tiendas?->cs_tienda) }}" id="cs_tienda" placeholder="Cs Tienda">
            {!! $errors->first('cs_tienda', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="url_tienda" class="form-label">{{ __('Url Tienda') }}</label>
            <input type="text" name="url_tienda" class="form-control @error('url_tienda') is-invalid @enderror" value="{{ old('url_tienda', $woo_tiendas?->url_tienda) }}" id="url_tienda" placeholder="Url Tienda">
            {!! $errors->first('url_tienda', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $woo_tiendas?->activo) }}" id="activo" placeholder="Activo">
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-warning">{{ __('Submit') }}</button>
    </div>
</div>