<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body
<div class="p-3 mb-2 bg-info-subtle text-emphasis-info text-emphasis-success">
            <!--=====================================
        LOGOTIPO
        ======================================-->

        <div class="container-fluid">

            <h3 class="text-center py-3">Taller de Sistema de Información</h3>

        </div>

        <!--=====================================
        BOTONERA
        ======================================-->

        <div class="container-fluid  bg-light">

            <div class="container">

                <ul class="nav nav-justified py-2 nav-pills">

                    <li class="nav-item">
                        <a class="nav-link " href="login">Ingresar</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="index.blade.php">Inicio</a>
                    </li>

                   {{--  <li class="nav-item">
                        <a class="nav-link" href="index.html">Administrador</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Salir</a>
                    </li> --}}

                </ul>

            </div>

        </div>
    <br>
        <!--=====================================
        CONTENIDO
        ======================================-->
    <div class="card bg-primary-subtle text-emphasis-primary text-body">
        <div class="container text-center" style="width: 800px;">
            <div class="row align-items-center">
                <div class="col-sm-md">
                <form action="{{ url('/Profesores') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card col-sm-md">
                            <div class="card-header center-text">
                                Registro Profesor
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" id="nombre" name="nombre"  class="form-control">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="apellido">Apellido</label>
                                        <input type="text" id="apellido" name="apellido"class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-auto">
                                    <label for="rut">Rut</label>
                                    <input type="text" placeholder="Ingrese rut sin puntos y con guión." id="rut" name="rut"class="form-control form-text text-align-center">
                                    <small class="form-text text-muted"></small>
                                </div>
                                <br>
                                <div class="form-group">
                                        <input type="submit" value = "Cancelar" class= "btn btn-warning">
                                        <input type="submit" value ="Registrar" class="btn btn-secondary">
                                </div>
                            </div>
                        </div>
                    </form>


                <br>
                <div class="row align-items-center">
                    <div class="col">
                        <form action="{{ url('/Estudiantes') }}" method="post" enctype="multipart/form-data">
                        @csrf

                            <div class="card col-sm-md">
                                <div class="card-header center-text">
                                    Registro Alumno
                                </div>
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" id="nombre" name="nombre" class="form-control">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="apellido">Apellido</label>
                                            <input type="text" id="apellido" name= "apellido"class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-auto">
                                        <label for="rut">Rut</label>
                                        <input type="text" placeholder="Ingrese rut sin puntos y con guión." id="rut" name= "rut"class="form-control">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                    <div class="col-auto">
                                        <label for="email" class="form-label">Ingresar Email</label>
                                        <input type="email" class="form-control" id="email" name= "email"placeholder="name@example.com">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="submit" value = "Cancelar" class= "btn btn-warning">
                                        <input type="submit" value ="Registrar" class="btn btn-secondary">
                                        
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
