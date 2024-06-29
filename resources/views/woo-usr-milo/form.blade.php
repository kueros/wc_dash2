<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_tienda" class="form-label">{{ __('Id Tienda') }}</label>
            <input type="text" name="id_tienda" class="form-control @error('id_tienda') is-invalid @enderror" value="{{ old('id_tienda', $wooUsrMilo?->id_tienda) }}" id="id_tienda" placeholder="Id Tienda">
            {!! $errors->first('id_tienda', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="usr_milo" class="form-label">{{ __('Usr Milo') }}</label>
            <input type="text" name="usr_milo" class="form-control @error('usr_milo') is-invalid @enderror" value="{{ old('usr_milo', $wooUsrMilo?->usr_milo) }}" id="usr_milo" placeholder="Usr Milo">
            {!! $errors->first('usr_milo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="psw_milo" class="form-label">{{ __('Psw Milo') }}</label>
            <input type="text" name="psw_milo" class="form-control @error('psw_milo') is-invalid @enderror" value="{{ old('psw_milo', $wooUsrMilo?->psw_milo) }}" id="psw_milo" placeholder="Psw Milo">
            {!! $errors->first('psw_milo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="customer_code" class="form-label">{{ __('Customercode') }}</label>
            <input type="text" name="CustomerCode" class="form-control @error('CustomerCode') is-invalid @enderror" value="{{ old('CustomerCode', $wooUsrMilo?->CustomerCode) }}" id="customer_code" placeholder="Customercode">
            {!! $errors->first('CustomerCode', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="first_name" class="form-label">{{ __('Firstname') }}</label>
            <input type="text" name="FirstName" class="form-control @error('FirstName') is-invalid @enderror" value="{{ old('FirstName', $wooUsrMilo?->FirstName) }}" id="first_name" placeholder="Firstname">
            {!! $errors->first('FirstName', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="last_name" class="form-label">{{ __('Lastname') }}</label>
            <input type="text" name="LastName" class="form-control @error('LastName') is-invalid @enderror" value="{{ old('LastName', $wooUsrMilo?->LastName) }}" id="last_name" placeholder="Lastname">
            {!! $errors->first('LastName', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telephone" class="form-label">{{ __('Telephone') }}</label>
            <input type="text" name="Telephone" class="form-control @error('Telephone') is-invalid @enderror" value="{{ old('Telephone', $wooUsrMilo?->Telephone) }}" id="telephone" placeholder="Telephone">
            {!! $errors->first('Telephone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="Email" class="form-control @error('Email') is-invalid @enderror" value="{{ old('Email', $wooUsrMilo?->Email) }}" id="email" placeholder="Email">
            {!! $errors->first('Email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>