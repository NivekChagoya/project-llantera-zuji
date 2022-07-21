<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg pt-3 pb-3" style="background-color:#164B80">
        <a class="navbar-brand text-white">
            <img alt="logo" src="/imagenes/logo.png" style="width:85px; height:60px;">
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
                        PRODUCTOS
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verCliente')}}">
                        CLIENTES
                    </a>
                </li>
                <li class="navbar-item active">
                    <a class="nav-link text-uppercase font-weight-bold text-warning" href="{{url ('verEmpleado')}}">
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
        <h1 class="text-center" style=" color: #164B80; font-family: Space Ranger Academy;">actualizacion de datos de los productos</h1>
        <br>

        <form class="" action="{{ url('actualizarProducto') }}" method="post">
            @csrf
            <input type="hidden" name="idProducto" value="{{$producto->idProducto}}">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        Marca: <input type="text" maxlength="19" class="form-control" name="marca" value="{{$producto->marca}}">
                    </div>
                    <div class="col-6">
                        Modelo: <input type="text" maxlength="19" class="form-control" name="modelo" value="{{$producto->modelo}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        Rin: <input type="text" maxlength="5" class="form-control" name="rin" value="{{$producto->rin}}">
                    </div>
                    <div class="col-6">
                        Ancho: <input type="text" maxlength="10" class="form-control" name="ancho" pattern="[0-9]+" value="{{$producto->ancho}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        Serie: <input type="text" maxlength="9" class="form-control" name="serie" value="{{$producto->serie}}">
                    </div>
                    <div class="col-6">
                        IndiceVel: <input type="text" maxlength="9" class="form-control" name="indiceVel" value="{{$producto->indiceVel}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        Stock: <input type="text" maxlength="8" class="form-control" pattern="[0-9]+" name="stock" value="{{$producto->stock}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        Precio: <input type="text" maxlength="8" class="form-control" pattern="[0-9]+" name="precio" value="{{$producto->precio}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <input type="submit" class="btn btn-primary" name="actualizar" value="Actualizar">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 ">
                        <div style="position: absolute; top: -38px; right: 250px;">
                            <a href="{{url ('verProducto')}}">
                                <input class="btn btn-danger" name="Cancelar" value="Cancelar" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <br>
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