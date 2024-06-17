<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_tienda" class="form-label">{{ __('Store Id') }}</label>
            <input type="text" name="id_tienda" class="form-control @error('id_tienda') is-invalid @enderror" value="{{ old('id_tienda', $orderIn?->id_tienda) }}" id="id_tienda" placeholder="Store Id">
            {!! $errors->first('id_tienda', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="order_id" class="form-label">{{ __('Order Id') }}</label>
            <input type="text" name="order_id" class="form-control @error('order_id') is-invalid @enderror" value="{{ old('order_id', $orderIn?->order_id) }}" id="order_id" placeholder="Order Id">
            {!! $errors->first('order_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="index_id" class="form-label">{{ __('Index Id') }}</label>
            <input type="text" name="index_id" class="form-control @error('index_id') is-invalid @enderror" value="{{ old('index_id', $orderIn?->index_id) }}" id="index_id" placeholder="Index Id">
            {!! $errors->first('index_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="order_nro" class="form-label">{{ __('Order Nro') }}</label>
            <input type="text" name="order_nro" class="form-control @error('order_nro') is-invalid @enderror" value="{{ old('order_nro', $orderIn?->order_nro) }}" id="order_nro" placeholder="Order Nro">
            {!! $errors->first('order_nro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechacre" class="form-label">{{ __('Fechacre') }}</label>
            <input type="text" name="fechacre" class="form-control @error('fechacre') is-invalid @enderror" value="{{ old('fechacre', $orderIn?->fechacre) }}" id="fechacre" placeholder="Fechacre">
            {!! $errors->first('fechacre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tstamp" class="form-label">{{ __('Tstamp') }}</label>
            <input type="text" name="tstamp" class="form-control @error('tstamp') is-invalid @enderror" value="{{ old('tstamp', $orderIn?->tstamp) }}" id="tstamp" placeholder="Tstamp">
            {!! $errors->first('tstamp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="respcode" class="form-label">{{ __('Respcode') }}</label>
            <input type="text" name="respcode" class="form-control @error('respcode') is-invalid @enderror" value="{{ old('respcode', $orderIn?->respcode) }}" id="respcode" placeholder="Respcode">
            {!! $errors->first('respcode', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="status" class="form-label">{{ __('Status') }}</label>
            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $orderIn?->status) }}" id="status" placeholder="Status">
            {!! $errors->first('status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="resmessage" class="form-label">{{ __('Resmessage') }}</label>
            <input type="text" name="resmessage" class="form-control @error('resmessage') is-invalid @enderror" value="{{ old('resmessage', $orderIn?->resmessage) }}" id="resmessage" placeholder="Resmessage">
            {!! $errors->first('resmessage', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="trackid" class="form-label">{{ __('Trackid') }}</label>
            <input type="text" name="trackid" class="form-control @error('trackid') is-invalid @enderror" value="{{ old('trackid', $orderIn?->trackid) }}" id="trackid" placeholder="Trackid">
            {!! $errors->first('trackid', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="shipment_id" class="form-label">{{ __('Shipment Id') }}</label>
            <input type="text" name="shipment_id" class="form-control @error('shipment_id') is-invalid @enderror" value="{{ old('shipment_id', $orderIn?->shipment_id) }}" id="shipment_id" placeholder="Shipment Id">
            {!! $errors->first('shipment_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="print_url" class="form-label">{{ __('Print Url') }}</label>
            <input type="text" name="print_url" class="form-control @error('print_url') is-invalid @enderror" value="{{ old('print_url', $orderIn?->print_url) }}" id="print_url" placeholder="Print Url">
            {!! $errors->first('print_url', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="code" class="form-label">{{ __('Code') }}</label>
            <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" value="{{ old('code', $orderIn?->code) }}" id="code" placeholder="Code">
            {!! $errors->first('code', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $orderIn?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="idstore" class="form-label">{{ __('Idstore') }}</label>
            <input type="text" name="idstore" class="form-control @error('idstore') is-invalid @enderror" value="{{ old('idstore', $orderIn?->idstore) }}" id="idstore" placeholder="Idstore">
            {!! $errors->first('idstore', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="financial_status" class="form-label">{{ __('Financial Status') }}</label>
            <input type="text" name="financial_status" class="form-control @error('financial_status') is-invalid @enderror" value="{{ old('financial_status', $orderIn?->financial_status) }}" id="financial_status" placeholder="Financial Status">
            {!! $errors->first('financial_status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>