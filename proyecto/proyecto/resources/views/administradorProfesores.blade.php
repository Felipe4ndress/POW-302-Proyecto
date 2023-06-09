<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-info-subtle text-emphasis-info text-emphasis-success";>
        <div class="container-fluid">
            <h3 class="text-center fst-italic fs-1 py-3">Taller de Sistema de informacion</h3>
            <br>
        <div class="container-fluid  bg-light">
            <div class="container">
                <ul class="nav nav-justified py-2 nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/">Salir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="administrador">Volver</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="index.html">Administrador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Salir</a>
                    </li>  -->
                </ul>
            </div>
        </div>
        <br>
        <br>

        </div>
        <div class="container text-center" id="Alumnos">
            <div class="row">
            
                <div class="card">
                    <div class="card-header center-text">
                        <H3> Profesores</H3>
                    </div>
                    <table class="table table-bordered col-auto">
                        <thead>
                            <tr>
                                <th>Rut</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th colspan="col-auto" >Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profesores as $profesor )
                            
                            <tr>
                                <td>{{$profesor->rut}}</td>
                                <td>{{$profesor->nombre}}</td>
                                <td>{{$profesor->apellido}}</td>
                                <td>



                                <!-- Modal -->
                                    <div>
                                        <a type="button" class="btn btn-warning" href="{{ url('/profesores/'.$profesor->rut.'/edit') }}">
                                            Editar
                                        </a>
                                        <br>
                                        <br>
                                        <form method="post" action="{{url('/profesores/'.$profesor->rut) }}">
                                        @csrf 
                                        {{ method_field('DELETE') }}
                                        <input type="button" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger" value="Borrar">

                                        </form>
                                        <br>
                                        </div>
                                    </td>
                            </tr>
                            @endforeach
                                   <!-- Button trigger modal -->

                                    <!-- Modal -->



                                    
                                

                            
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>