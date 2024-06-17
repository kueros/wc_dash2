@extends('layouts.app')

@section('template_title')
    {{ $orderIn->name ?? __('Show') . " " . __('Order In') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Order In</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('order-in.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Store Id:</strong>
                                    {{ $orderIn->id_tienda }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Order Id:</strong>
                                    {{ $orderIn->order_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Index Id:</strong>
                                    {{ $orderIn->index_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Order Nro:</strong>
                                    {{ $orderIn->order_nro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechacre:</strong>
                                    {{ $orderIn->fechacre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tstamp:</strong>
                                    {{ $orderIn->tstamp }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Respcode:</strong>
                                    {{ $orderIn->respcode }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Status:</strong>
                                    {{ $orderIn->status }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Resmessage:</strong>
                                    {{ $orderIn->resmessage }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Trackid:</strong>
                                    {{ $orderIn->trackid }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Shipment Id:</strong>
                                    {{ $orderIn->shipment_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Print Url:</strong>
                                    {{ $orderIn->print_url }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Code:</strong>
                                    {{ $orderIn->code }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $orderIn->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idstore:</strong>
                                    {{ $orderIn->idstore }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Financial Status:</strong>
                                    {{ $orderIn->financial_status }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
