@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Bienvenidos')
@section('content_header_title', 'Inicio')
@section('content_header_subtitle', 'Bienvenidos')
<link href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" rel="stylesheet">

{{-- Content body: main page content --}}

@section('content_body')
<main class="main">
    <div class="container-fluid" id="app" :class="{'loading': loading}">
        <div class="modals">
            <v-dialog />
        </div>
        <div>
            <notifications position="bottom right" :duration="2000" />
        </div>
        <?php #dd($data->cli_id); 
        ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        Orden Nro: {{ $data->order_nro }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Datos Generales</h5>
                        <p class="card-text"><strong> Tracking ID:</strong> {{ $data->tracking_id }}</p>
                        <p class="card-text"><strong> Estado:</strong> {{ $data->financial_status }}</p>
                        <p class="card-text"><strong> Nombre:</strong> {{ $data->name }}</p>
                        <!--a href="#" class="btn btn-warning">Go somewhere</a-->
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        Estados
                    </div>
                    <div class="card-body">
                        <h4 class="card-text"><strong> Pagado:</strong> {{ $data->financial_status ?? 'No paid' }}</h4>
                        <!--a href="#" class="btn btn-warning">Go somewhere</a-->
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        Datos del cliente
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Datos Personales</h5>
                        <h4 class="card-text"><strong> Nombre:</strong> {{ $data->name }}</h4>
                        <h4 class="card-text"><strong> Teléfono:</strong> {{ $data->phone }}</h4>
                        <h4 class="card-text"><strong> Shopify Client Id:</strong> {{ $data->cli_id }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        Dirección de envío
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Datos Postales</h5>
                        <h4 class="card-text"><strong> Calle:</strong> {{ $data->address1 }}</h4>
                        <h4 class="card-text"><strong> Número:</strong> {{ $data->address2 }}</h4>
                        <h4 class="card-text"><strong> Ciudad:</strong> {{ $data->city }}</h4>
                        <h4 class="card-text"><strong> Provincia:</strong> {{ $data->province }}</h4>
                        <h4 class="card-text"><strong> C.Postal:</strong> {{ $data->zip }}</h4>
                        <h4 class="card-text"><strong> País:</strong> {{ $data->country }}</h4>
                        <h4 class="card-text"><strong> Cód.Provincia:</strong> {{ $data->province_code }}</h4>
                        <h4 class="card-text"><strong> Notas:</strong> {{ $data->notes }}</h4>
                        <!--a href="#" class="btn btn-warning">Go somewhere</a-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Artículos de la orden
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <th>Código</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>SKU</th>
                                    <th>Prof.</th>
                                    <th>Altoth>
                                    <th>Ancho</th>
                                </thead>
                                <tbody>
                                    @foreach ($producto as $productos)
                                    <tr>
                                        <?php #dd($datos); 
                                        ?>
                                        <td>{{ $productos->line_items_id }}</td>
                                        <td>{{ $productos->line_items_quantity }}</td>
                                        <td>{{ $productos->line_items_price }}</td>
                                        <td>{{ $productos->line_items_sku }}</td>
                                        <td>{{ $productos->depth }}</td>
                                        <td>{{ $productos->height }}</td>
                                        <td>{{ $productos->width }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>



            </div>
        </div>
        </store-listing>



        @stop

        {{-- Push extra CSS --}}

        @push('css')
        {{-- Add here extra stylesheets --}}
        {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
        @endpush

        {{-- Push extra scripts --}}

        @push('js')
        <script>
            console.log("Hi, I'm using the Laravel-AdminLTE package!");
        </script>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
            new DataTable('#example');
        </script>
        @endpush