@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Woo Usr Milo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Woo Usr Milo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('woo-usr-milos.update', $wooUsrMilo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('woo-usr-milo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
