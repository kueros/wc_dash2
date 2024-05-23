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

                             <div class="float-right">
                                <a href="{{ route('configs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        <th>No</th>
                                        
									<th >Urlroot</th>
									<th >Cli Id</th>
									<th >Cli Pass</th>
									<th >Re Dir Url</th>
									<th >Fi Logs</th>
									<th >Scope</th>
									<th >Callback Url Carrier</th>
									<th >Webhook Address Orders Create</th>
									<th >Webhook Address Orders Paid</th>
									<th >Webhook Address Orders Cancelled</th>
									<th >Api U</th>
									<th >Api P</th>
									<th >Shop Test</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($configs as $config)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $config->urlroot }}</td>
										<td >{{ $config->cli_id }}</td>
										<td >{{ $config->cli_pass }}</td>
										<td >{{ $config->re_dir_url }}</td>
										<td >{{ $config->fi_logs }}</td>
										<td >{{ $config->scope }}</td>
										<td >{{ $config->callback_url_carrier }}</td>
										<td >{{ $config->webhook_address_orders_create }}</td>
										<td >{{ $config->webhook_address_orders_paid }}</td>
										<td >{{ $config->webhook_address_orders_cancelled }}</td>
										<td >{{ $config->api_u }}</td>
										<td >{{ $config->api_p }}</td>
										<td >{{ $config->shop_test }}</td>

                                            <td>
                                                <form action="{{ route('configs.destroy', $config->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('configs.show', $config->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('configs.edit', $config->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
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
