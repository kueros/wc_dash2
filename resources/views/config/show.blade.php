@extends('layouts.app')

@section('template_title')
    {{ $config->name ?? __('Show') . " " . __('Config') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Config</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('configs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Urlroot:</strong>
                                    {{ $config->urlroot }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cli Id:</strong>
                                    {{ $config->cli_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cli Pass:</strong>
                                    {{ $config->cli_pass }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Re Dir Url:</strong>
                                    {{ $config->re_dir_url }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fi Logs:</strong>
                                    {{ $config->fi_logs }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Scope:</strong>
                                    {{ $config->scope }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Callback Url Carrier:</strong>
                                    {{ $config->callback_url_carrier }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Webhook Address Orders Create:</strong>
                                    {{ $config->webhook_address_orders_create }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Webhook Address Orders Paid:</strong>
                                    {{ $config->webhook_address_orders_paid }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Webhook Address Orders Cancelled:</strong>
                                    {{ $config->webhook_address_orders_cancelled }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Api U:</strong>
                                    {{ $config->api_u }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Api P:</strong>
                                    {{ $config->api_p }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Shop Test:</strong>
                                    {{ $config->shop_test }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
