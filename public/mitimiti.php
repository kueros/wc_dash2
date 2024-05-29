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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitad Negra y Mitad Blanca</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .left-half {
            background-color: black;
            height: 100vh;
            /* Asegura que ocupa toda la altura de la pantalla */
            display: flex;
            align-items: center;
            /* Centra verticalmente */
            justify-content: center;
            /* Centra horizontalmente */
        }

        .right-half {
            background-color: white;
            height: 100vh;
            /* Asegura que ocupa toda la altura de la pantalla */
            display: flex;
            align-items: center;
            /* Centra verticalmente */
            justify-content: center;
            /* Centra horizontalmente */
        }

        .left-half img {
            max-width: 100%;
            /* Ajusta el tamaño de la imagen */
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 left-half">
                <img src="vendor/adminlte/dist/img/iflowEcommerceLogo.png" alt="Logo">
            </div>
            <div class="col-md-6 right-half">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <i class="fas fa-lock btn-sm btn-warning"></i> Login
                    </div>

                    <div class="card-body">
                        <form method="POST" action="login">
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <button type="submit" class="btn btn-warning btn-block">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enlace a jQuery y Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>