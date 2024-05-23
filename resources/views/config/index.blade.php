@extends('layouts.app')

@section('template_title')
Configs
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Configs') }}
                        </span>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success m-4">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th></th>
                                    <th>Url Root</th>
                                    <th>Shopify Client Id</th>
                                    <th>Api Iflow User</th>
                                    <th>Api Iflow Password</th>
                                    <th>Shop Test</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($configs as $config)
                                <tr>
                                    <td>
                                            <a class="btn btn-sm btn-primary " href="{{ route('configs.show', $config->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                            <a class="btn btn-sm btn-success" href="{{ route('configs.edit', $config->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                            @csrf
                                    </td>
                                    <td>{{ $config->urlroot }}</td>
                                    <td>{{ $config->cli_id }}</td>
                                    <td>{{ $config->api_u }}</td>
                                    <td>{{ $config->api_p }}</td>
                                    <td>{{ $config->shop_test }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $configs->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection