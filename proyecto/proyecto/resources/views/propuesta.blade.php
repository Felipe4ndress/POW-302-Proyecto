
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <a href="ingresar.html"></a>

</head>
<body class="bg-info-subtle text-emphasis-info text-emphasis-success";>
    <div class="container-fluid">

		<h3 class="text-center fst-italic fs-1 py-3">Taller de Sistema de informacion</h3>
        <br>
	<div class="container-fluid  bg-light">

		<div class="container">

			<ul class="nav nav-justified py-2 nav-pills">

				<li class="nav-item">
					<a class="nav-link active" href="proyecto.html">Proyecto</a>
				</li>

				<li class="nav-item">
					<a class="nav-link " href="/">Salir</a>
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
    <div class="container text-center">
		<div class="row">
			<div class="col-md-6 offset-md-3">
            <form action="{{ url('/Propuestas') }}" method="post" enctype="multipart/form-data">
                    @csrf
					<div class="card">
						<div class="card-header center-text">
							<h2>PROYECTO</h2>
						</div>
						<div class="card-body">
                            <div class="row">
								<div class="form-group col">
                                    <label for="estudiante_rut">Rut</label>
                                    <input type="text" id="estudiante_rut" name="estudiante_rut"  class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
                                    <label for="id">Id</label>
                                    <br>
                                    <input type="text" id="id" name="id"  class="form-control">
								</div>
							</div>
							<div class="mb-3">
                                <label for="documento" class="form-label">Subir propuesta.pdf</label>
                                <input type="file" id="documento" name="documento"class="form-control form-text text-align-center">
                                <small class="form-text text-muted"></small>
							</div>
							<div>
                                <label for="fecha"></label>
								<input type="date" id="fecha" name="fecha">
								<input type="submit" onclick="agregarfecha()"></button>
								<script>
									function agregarfecha(){
										var fecha = document.getElementById('fechaInput').value;
										alert('Fecha seleccionada' + fecha);
									}
								</script>
							</div>
                            <br>
							<div class="form-group">
								<button class="btn btn-warning">Aceptar</button>
								<button class="btn btn-secondary">Volver</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</a>
</body>
</html>

