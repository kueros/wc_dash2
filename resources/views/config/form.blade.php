<div class="row padding-1 p-1">
	<div class="col-md-12">

		<div class="form-group mb-2 mb20">
			<label for="url_create_order" class="form-label">Url Create Order</label>
			<input type="text" name="url_create_order" class="form-control @error('url_create_order') is-invalid @enderror" value="{{ old('url_create_order', $configs?->url_create_order) }}" id="url_create_order" placeholder="Url Create Order">
			{!! $errors->first('url_create_order', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
		</div>
		<div class="form-group mb-2 mb20">
			<label for="url_create_order_milo" class="form-label">Url Create Order Milonga</label>
			<input type="text" name="url_create_order_milo" class="form-control @error('url_create_order_milo') is-invalid @enderror" value="{{ old('url_create_order_milo', $configs?->url_create_order_milo) }}" id="url_create_order_milo" placeholder="Url Create Order Milonga">
			{!! $errors->first('url_create_order_milo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
		</div>
		<div class="form-group mb-2 mb20">
			<label for="url_rate" class="form-label">Url Rate</label>
			<input type="text" name="url_rate" class="form-control @error('url_rate') is-invalid @enderror" value="{{ old('url_rate', $configs?->url_rate) }}" id="url_rate" placeholder="Url Rate">
			{!! $errors->first('url_rate', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
		</div>
		<div class="form-group mb-2 mb20">
			<label for="url_cancel_order" class="form-label">Url Cancel Order</label>
			<input type="text" name="url_cancel_order" class="form-control @error('url_cancel_order') is-invalid @enderror" value="{{ old('url_cancel_order', $configs?->url_cancel_order) }}" id="url_cancel_order" placeholder="Url Cancel Order">
			{!! $errors->first('url_cancel_order', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
		</div>
		<div class="form-group mb-2 mb20">
			<label for="url_cancel_order_milo" class="form-label">Url Cancel Order Milonga</label>
			<input type="text" name="url_cancel_order_milo" class="form-control @error('url_cancel_order_milo') is-invalid @enderror" value="{{ old('url_cancel_order_milo', $configs?->url_cancel_order_milo) }}" id="url_cancel_order_milo" placeholder="Url Cancel Order Milonga">
			{!! $errors->first('url_cancel_order_milo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
		</div>
		<div class="form-group mb-2 mb20">
			<label for="url_logistica_inversa" class="form-label">Url Logistica Inversa</label>
			<input type="text" name="url_logistica_inversa" class="form-control @error('url_logistica_inversa') is-invalid @enderror" value="{{ old('url_logistica_inversa', $configs?->url_logistica_inversa) }}" id="url_logistica_inversa" placeholder="Url Logistica Inversa">
			{!! $errors->first('url_logistica_inversa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
		</div>
		<div class="form-group mb-2 mb20">
			<label for="url_download" class="form-label">Url Download</label>
			<input type="text" name="url_download" class="form-control @error('url_download') is-invalid @enderror" value="{{ old('url_download', $configs?->url_download) }}" id="url_download" placeholder="Url Download">
			{!! $errors->first('url_download', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
		</div>
		<div class="form-group mb-2 mb20">
			<label for="shipping_id" class="form-label">Shipping ID</label>
			<input type="text" name="shipping_id" class="form-control @error('shipping_id') is-invalid @enderror" value="{{ old('shipping_id', $configs?->shipping_id) }}" id="shipping_id" placeholder="Shipping ID">
			{!! $errors->first('shipping_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
		</div>
		<div class="form-group mb-2 mb20">
			<label for="key_shipping_id" class="form-label">Key Sipping ID</label>
			<input type="text" name="key_shipping_id" class="form-control @error('key_shipping_id') is-invalid @enderror" value="{{ old('key_shipping_id', $configs?->key_shipping_id) }}" id="key_shipping_id" placeholder="Key Sipping ID">
			{!! $errors->first('key_shipping_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
		</div>
		<div class="form-group mb-2 mb20">
			<label for="path_log" class="form-label">Path Log</label>
			<input type="text" name="path_log" class="form-control @error('path_log') is-invalid @enderror" value="{{ old('path_log', $configs?->path_log) }}" id="path_log" placeholder="Path Log">
			{!! $errors->first('path_log', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
		</div>

	</div>
	<div class="col-md-12 mt20 mt-2">
		<button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
	</div>
</div>