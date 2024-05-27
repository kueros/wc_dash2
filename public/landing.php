<?php
require_once("config/conexion.php");
$sql = mysqli_query($con, "SELECT * FROM adminLTE.landings order by id desc limit 1;");
$row = mysqli_fetch_assoc($sql);
$url_landing = $row['url_landing'];
$url_dashboard = $row['url_dashboard'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="ske7MnDLDDtUCcoNsxLVFMR2c5xVU1BggIcUcUTe">
    <title>
        iFlow Admin Panel
    </title>
    <link rel="stylesheet" href="http://localhost:8000/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://localhost:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://localhost:8000/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <style type="text/css">
        /*
    .card-header {
        border-bottom: none;
    }
    .card-title {
        font-weight: 600;
    }
    */
    </style>
</head>

<body class="layout-fixed sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar
    navbar-expand
    navbar-orange navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fas fa-bars" style="color: white"><span style="font-size: 1.25rem; color: white"> Landing Page Tiendas Shopify IFLOW</span></i>
                        <span class="sr-only">Alternar barra de navegación</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-light-warning" style="background-color: #f4f6f9;">
            <a href=" http://localhost:8000/home" style="background-color: black;" class="brand-link logo-switch ">
                <img src="http://localhost:8000/vendor/adminlte/dist/img/iFlow_Logo.png" alt="Iflow Logo" class="brand-image img-circle elevation-3 logo-xs">
                <img src="http://localhost:8000/vendor/adminlte/dist/img/iFlow_Logo.png" alt="Iflow Logo" class="brand-image-xs logo-xl">
            </a>
        </aside>
        <div class="content-wrapper" style="padding-top: 150px;">
            <div class="content">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">ACCESOS</div>
                                    <div class="card-body">
                                        <a href=<?php echo $url_instalador; ?> type="button" class="btn btn-block bg-gradient-orange btn-lg" style="color: white;">INSTALADOR</a>
                                        <a href=<?php echo $url_dashboard; ?> type="button" class="btn btn-block bg-gradient-orange btn-lg" style="color: white;">DASHBOARD</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
        </footer>
    </div>
    <script src="http://localhost:8000/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="http://localhost:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add your common script logic here...
        });
    </script>
</body>

</html>