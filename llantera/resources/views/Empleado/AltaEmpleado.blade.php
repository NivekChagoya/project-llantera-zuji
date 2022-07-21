<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" rel="stylesheet">
    <script crossorigin="anonymous" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    </script>
    <script crossorigin="anonymous" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>
    <script crossorigin="anonymous" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" media="screen" rel="stylesheet" />
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/420f914e54.js">
    </script>
    </link>
</head>

<body>
    <nav class="navbar navbar-expand-lg pt-3 pb-3" style="background-color:#164B80">
        <a class="navbar-brand text-white">
            <img alt="logo" src="imagenes/logo.png" style="width:85px; height:60px;">
            </img>
        </a>
        <button class="navbar-toggler" data-target="#Menu" data-toggle="collapse" type="button">
            <span class="navbar-toggle-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="Menu">
            <ul class="navbar-nav mr-auto">
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('inicio3')}}">
                        <i class="fas fa-home">
                        </i>
                        INICIO
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verProducto')}}">
                        VER-PRODUCTOS
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verCliente')}}">
                        CLIENTES
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('AltaEmpleado')}}">
                        EMPLEADOS
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verPago')}}">
                        PAGOS
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verCompra')}}">
                        COMPRAS
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('registroProducto')}}">
                        REGISTRAR-PRODUCTOS
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-text">
            <a class="navbar-text text-white btn btn-danger active" href="{{url ('inicio')}}" type="button">
                <i class="fas fa-sign-out-alt">
                </i>
                Cerrar Sesión
            </a>
        </div>
    </nav>
    <main>
        <h1 class="text-center" style=" color: #164B80; font-family: Space Ranger Academy;">alta de empleado</h1>
        <form class="form-horizontal" action="{{ url('AltaEmploy') }}" method="post">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        Nombre: <input type="text" class="form-control" name="nombre">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Apellidos: <input type="text" class="form-control" name="apellido">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Telefono: <input type="number" class="form-control" name="telefono">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Correo: <input type="text" class="form-control" name="correo">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <input type="submit" class="btn btn-primary" name="boton" value="Registrar">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menú de Opciones
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item active" href="{{url ('verEmpleado')}}">Visualizar</a>
                            <a class="dropdown-item" href="{{url ('verEmpleado')}}">Editar</a>
                            <a class="dropdown-item" href="{{url ('verEmpleado')}}">Eliminar</a>
                        </div>
                    </div>
                </div>
        </form>
        <div style="position: absolute; top: 150px; right: 90px;" class="img-thumbnail">
            <img src="imagenes/EmpleadoImg.jpg">
        </div>
    </main>
    <br><br><br><br><br>
    <footer class="navbar navbar-expand-lg navbar-dark text-white" style="background-color:#164B80">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="text-center">
                    <a href="https://www.facebook.com/groups/432012430552063">
                        <i class="fab fa-facebook-f fa-2x mr-4" style="color:white">
                        </i>
                    </a>
                    <a href="https://twitter.com/IamYanetGarcia">
                        <i class="fab fa-twitter fa-2x mr-4" style="color:white">
                        </i>
                    </a>
                    <a href="https://www.instagram.com/p/CSxJTlpnH7q/?utm_source=ig_web_copy_link">
                        <i class="fab fa-instagram fa-2x mr-4" style="color:white">
                        </i>
                    </a>
                    <h5 class="text-uppercase mb-4 text-warning" style="margin-top:8px; font-family:Times New Roman; font-size:30px;">
                        Llantera Zuji S.A De C.V
                    </h5>
                    <p style="margin-top: 5px;">
                        ¡Tú tranquilo! Porque la capacidad de adaptación de estas llantas es estupenda. Bridgestone
                        es la marca de neumáticos por excelencia de autos como BMW, Mercedes, Ferrari, Audi y Porsche.
                    </p>
                    <h6 class="text-uppercase mb-1 text-warning" style="font-family:Arial; font-size:80%;">
                        Copyright ©2021 - Desarrollado por EQUIPO1.
                    </h6>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>