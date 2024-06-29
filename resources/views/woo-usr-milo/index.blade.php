@extends('layouts.app')

@section('template_title')
    Woo Usr Milos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Woo Usr Milos') }}
                            </span>
                             <div class="float-right">
                                <a href="{{ route('woo-usr-milos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Id Tienda</th>
									<th >Usr Milo</th>
									<th >Psw Milo</th>
									<th >Customercode</th>
									<th >Firstname</th>
									<th >Lastname</th>
									<th >Telephone</th>
									<th >Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wooUsrMilos as $wooUsrMilo)
                                        <tr>
										<td >{{ $wooUsrMilo->id_tienda }}</td>
										<td >{{ $wooUsrMilo->usr_milo }}</td>
										<td >{{ $wooUsrMilo->psw_milo }}</td>
										<td >{{ $wooUsrMilo->CustomerCode }}</td>
										<td >{{ $wooUsrMilo->FirstName }}</td>
										<td >{{ $wooUsrMilo->LastName }}</td>
										<td >{{ $wooUsrMilo->Telephone }}</td>
										<td >{{ $wooUsrMilo->Email }}</td>

                                            <td>
                                                <form action="{{ route('woo-usr-milos.destroy', $wooUsrMilo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('woo-usr-milos.show', $wooUsrMilo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('woo-usr-milos.edit', $wooUsrMilo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
            </div>
        </div>
    </div>
@endsection
