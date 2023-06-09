<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Ejemplo MVC</title>

	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!--=====================================
	PLUGINS DE JS
	======================================-->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- Latest compiled Fontawesome-->
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>
<body class="bg-info-subtle text-emphasis-info text-emphasis-success";>


	<!--=====================================
	LOGOTIPO
	======================================-->

	<div class="container-fluid">

		<h3 class="text-center fst-italic fs-1 py-3">Taller de Sistema de informacion</h3>

	</div>

	<!--=====================================
	BOTONERA
	======================================-->
<br>
	<div class="container-fluid  bg-light">

		<div class="container">

			<ul class="nav nav-justified py-2 nav-pills">

				<li class="nav-item">
					<a class="nav-link active" href="ingresar.html">Ingresar</a>
				</li>

				<li class="nav-item">
					<a class="nav-link " href="/">Inicio</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="administrador">Administrador</a>
				</li>

				<!-- <li class="nav-item">
					<a class="nav-link" href="#">Salir</a>
				</li>  -->

			</ul>

		</div>

	</div>
    <br>
    <br>

	<!--=====================================
	CONTENIDO
	======================================-->

	<div class="container text-center">
		<div class="row-6">
		  <div class="col">

		  </div>
		  <div class="row-6">
			<div class="col">
				<form action="">
					<div class="card">
						<div class="card-header center-text">
							<h2>Ingresar</h2>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="form-group col-6">
									<label for="nombre">Nombre</label>
									<input type="text" id="nombre" class="form-control">
								</div>
								<div class="form-group col-6">
									<label for="apellido">Apellido</label>
									<input type="text" id="apellido" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="rut">RUT</label>
								<input type="text" id="rut" class="form-control">
								<small class="form-text text-muted">Ingrese su rut sin puntos y con guión</small>
							</div>
							<div class="form-group">
								<a href="PropuestaProfesor" class="btn btn-warning">Profesor</a>
                                <br>
								<br>

                                <a href="PropuestaEstudiante" class="btn btn-primary">Alumno</a>



							</div>
						</div>
					</div>
				</form>
			  </div>
		  </div>
		  <div class="col">

		  </div>
		</div>
	  </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>