<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="urlroot" class="form-label">{{ __('Url Root') }}</label>
            <input type="text" name="urlroot" class="form-control @error('urlroot') is-invalid @enderror" value="{{ old('urlroot', $config?->urlroot) }}" id="urlroot" placeholder="Urlroot">
            {!! $errors->first('urlroot', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cli_id" class="form-label">{{ __('Shopify Client Id') }}</label>
            <input type="text" name="cli_id" class="form-control @error('cli_id') is-invalid @enderror" value="{{ old('cli_id', $config?->cli_id) }}" id="cli_id" placeholder="Cli Id">
            {!! $errors->first('cli_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cli_pass" class="form-label">{{ __('Shopify Client Secret') }}</label>
            <input type="text" name="cli_pass" class="form-control @error('cli_pass') is-invalid @enderror" value="{{ old('cli_pass', $config?->cli_pass) }}" id="cli_pass" placeholder="Cli Pass">
            {!! $errors->first('cli_pass', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="re_dir_url" class="form-label">{{ __('Url de Redirección') }}</label>
            <input type="text" name="re_dir_url" class="form-control @error('re_dir_url') is-invalid @enderror" value="{{ old('re_dir_url', $config?->re_dir_url) }}" id="re_dir_url" placeholder="Re Dir Url">
            {!! $errors->first('re_dir_url', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fi_logs" class="form-label">{{ __('Fi Logs') }}</label>
            <input type="text" name="fi_logs" class="form-control @error('fi_logs') is-invalid @enderror" value="{{ old('fi_logs', $config?->fi_logs) }}" id="fi_logs" placeholder="Fi Logs">
            {!! $errors->first('fi_logs', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="scope" class="form-label">{{ __('Scope') }}</label>
            <input type="text" name="scope" class="form-control @error('scope') is-invalid @enderror" value="{{ old('scope', $config?->scope) }}" id="scope" placeholder="Scope">
            {!! $errors->first('scope', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="callback_url_carrier" class="form-label">{{ __('Callback Url Carrier') }}</label>
            <input type="text" name="callback_url_carrier" class="form-control @error('callback_url_carrier') is-invalid @enderror" value="{{ old('callback_url_carrier', $config?->callback_url_carrier) }}" id="callback_url_carrier" placeholder="Callback Url Carrier">
            {!! $errors->first('callback_url_carrier', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="webhook_address_orders_create" class="form-label">{{ __('Webhook Address Orders Create') }}</label>
            <input type="text" name="webhook_address_orders_create" class="form-control @error('webhook_address_orders_create') is-invalid @enderror" value="{{ old('webhook_address_orders_create', $config?->webhook_address_orders_create) }}" id="webhook_address_orders_create" placeholder="Webhook Address Orders Create">
            {!! $errors->first('webhook_address_orders_create', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="webhook_address_orders_paid" class="form-label">{{ __('Webhook Address Orders Paid') }}</label>
            <input type="text" name="webhook_address_orders_paid" class="form-control @error('webhook_address_orders_paid') is-invalid @enderror" value="{{ old('webhook_address_orders_paid', $config?->webhook_address_orders_paid) }}" id="webhook_address_orders_paid" placeholder="Webhook Address Orders Paid">
            {!! $errors->first('webhook_address_orders_paid', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="webhook_address_orders_cancelled" class="form-label">{{ __('Webhook Address Orders Cancelled') }}</label>
            <input type="text" name="webhook_address_orders_cancelled" class="form-control @error('webhook_address_orders_cancelled') is-invalid @enderror" value="{{ old('webhook_address_orders_cancelled', $config?->webhook_address_orders_cancelled) }}" id="webhook_address_orders_cancelled" placeholder="Webhook Address Orders Cancelled">
            {!! $errors->first('webhook_address_orders_cancelled', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="api_u" class="form-label">{{ __('Api Iflow User') }}</label>
            <input type="text" name="api_u" class="form-control @error('api_u') is-invalid @enderror" value="{{ old('api_u', $config?->api_u) }}" id="api_u" placeholder="Api U">
            {!! $errors->first('api_u', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="api_p" class="form-label">{{ __('Api Iflow Password') }}</label>
            <input type="text" name="api_p" class="form-control @error('api_p') is-invalid @enderror" value="{{ old('api_p', $config?->api_p) }}" id="api_p" placeholder="Api P">
            {!! $errors->first('api_p', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="shop_test" class="form-label">{{ __('Shop Test') }}</label>
            <input type="text" name="shop_test" class="form-control @error('shop_test') is-invalid @enderror" value="{{ old('shop_test', $config?->shop_test) }}" id="shop_test" placeholder="Shop Test">
            {!! $errors->first('shop_test', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>