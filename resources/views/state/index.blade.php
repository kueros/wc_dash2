@extends('layouts.app')

@section('template_title')
    States
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('States') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('states.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >State Iflow</th>
									<th >State Sf</th>
									<th >State Final</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($states as $state)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $state->state_iflow }}</td>
										<td >{{ $state->state_sf }}</td>
										<td >{{ $state->state_final }}</td>

                                            <td>
                                                <form action="{{ route('states.destroy', $state->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('states.show', $state->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('states.edit', $state->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $states->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
