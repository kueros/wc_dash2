<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="state_iflow" class="form-label">{{ __('State Iflow') }}</label>
            <input type="text" name="state_iflow" class="form-control @error('state_iflow') is-invalid @enderror" value="{{ old('state_iflow', $state?->state_iflow) }}" id="state_iflow" placeholder="State Iflow">
            {!! $errors->first('state_iflow', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="state_sf" class="form-label">{{ __('State Sf') }}</label>
            <input type="text" name="state_sf" class="form-control @error('state_sf') is-invalid @enderror" value="{{ old('state_sf', $state?->state_sf) }}" id="state_sf" placeholder="State Sf">
            {!! $errors->first('state_sf', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="state_final" class="form-label">{{ __('State Final') }}</label>
            <input type="text" name="state_final" class="form-control @error('state_final') is-invalid @enderror" value="{{ old('state_final', $state?->state_final) }}" id="state_final" placeholder="State Final">
            {!! $errors->first('state_final', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-warning">{{ __('Enviar') }}</button>
    </div>
</div>