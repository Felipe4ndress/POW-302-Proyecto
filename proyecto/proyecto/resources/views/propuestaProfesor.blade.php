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
					<a class="nav-link" href="login">Inicio</a>
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

    <div class="container text-center" id="Alumnos">
        <div class="row">
          <div class="col">
            <div class="card">
                <div class="card-header center-text">
                    <H3> Alumnos</H3>
                </div>
                <table class="table table-bordered col-auto">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Rut</th>
                            <th>Email</th>
                            <th colspan="3 col-auto" >Comentarios</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>_____________</td>
                        <td>_____________</td>
                        <td>_____________</td>
                        <td>_____________</td>
                        <td>



                            <!-- Modal -->
                            <style>
                                /*



                                /* Estilos para la caja de comentarios */
                                .comment-box {
                                  width: 200px;
                                  margin-bottom: 5px;
                                  text-align: center center;
                                  align-items: center;
                                }
                                .comment {
                                  background-color: #f0f0f0;
                                  padding: 10px;
                                  bottom: rigth;
                                }
                                .comment .delete-btn {
                                  color: red;
                                  cursor: pointer;
                                  float: right;
                                }
                            </style>




                            <!-- Formulario para agregar comentarios -->
                            <div class="comment-box box-center">


                            <h3></h3>
                              <textarea id="commentText"></textarea><br>
                              <button onclick="addComment()">Agregar</button>
                            </div>

                            <!-- Lista de comentarios -->
                            <div id="commentList"></div>

                            <script>
                              // Arreglo para almacenar los comentarios
                              var comments = [];

                              // Función para agregar un comentario
                              function addComment() {
                                var commentText = document.getElementById("comment")
                              }

                              // Arreglo para almacenar los comentarios
                              var comments = [];

                              // Función para agregar un comentario
                              function addComment() {
                                var commentText = document.getElementById("")
                              }

                              // Arreglo para almacenar los comentarios
                              var comments = [];

                              // Función para agregar un comentario
                              function addComment() {
                                var commentText = document.getElementById("commentText").value;
                                if (commentText.trim() !== "") {
                                  comments.push(commentText);
                                  displayComments();
                                  document.getElementById("commentText").value = "";
                                }
                              }

                              // Función para eliminar un comentario
                              function deleteComment(index) {
                                comments.splice(index, 1);
                                displayComments();
                              }

                              // Función para mostrar los comentarios en la página
                              function displayComments() {
                                var commentList = document.getElementById("commentList")
                              }

                              // Arreglo para almacenar los comentarios
                              var comments = [];

                              // Función para agregar un comentario
                              function addComment() {
                                var commentText = document.getElementById("commentText").value;
                                if (commentText.trim() !== "") {
                                  comments.push(commentText);
                                  displayComments();
                                  document.getElementById("commentText").value = "";
                                }
                              }

                              // Función para eliminar un comentario
                              function deleteComment(index) {
                                comments.splice(index, 1);
                                displayComments();
                              }

                              // Función para mostrar los comentarios en la página
                              function displayComments() {
                                var commentList = document.getElementById("commentList");
                                commentList.innerHTML = "";
                              }

                                for (var i = 0; i < comments.length; i++) {
                                  var comment = document.createElement("div");
                                  comment.className = "comment";
                                }

                                  var deleteBtn = document.createElement("span");
                                  deleteBtn.className = "delete-btn"


                              // Arreglo para almacenar los comentarios
                              var comments = [];

                              // Función para agregar un comentario
                              function addComment() {
                                var commentText = document.getElementById("commentText").value;
                                if (commentText.trim() !== "") {
                                  comments.push(commentText);
                                  displayComments();
                                  document.getElementById("commentText").value = "";
                                }
                              }

                              // Función para eliminar un comentario
                              function deleteComment(index) {
                                comments.splice(index, 1);
                                displayComments();
                              }

                              // Función para mostrar los comentarios en la página
                              function displayComments() {
                                var commentList = document.getElementById("commentList");
                                commentList.innerHTML = "";
                              }

                                for (var i = 0; i < comments.length; i++) {
                                  var comment = document.createElement("div");
                                  comment.className = "comment";
                                }
                                  var deleteBtn = document.createElement("span");
                                  deleteBtn.className = "delete-btn";
                                  deleteBtn.innerHTML = "Eliminar";
                                  deleteBtn.setAttribute("onclick", "delete")

                              // Arreglo para almacenar los comentarios
                              var comments = [];

                              // Función para agregar un comentario
                              function addComment() {
                                var commentText = document.getElementById("commentText").value;
                                if (commentText.trim() !== "") {
                                  comments.push(commentText);
                                  displayComments();
                                  document.getElementById("commentText").value = "";
                                }
                              }

                              // Función para eliminar un comentario
                              function deleteComment(index) {
                                comments.splice(index, 1);
                                displayComments();
                              }

                              // Función para mostrar los comentarios en la página
                              function displayComments() {
                                var commentList = document.getElementById("commentList");
                                commentList.innerHTML = "";
                              }

                                for (var i = 0; i < comments.length; i++) {
                                  var comment = document.createElement("div");
                                  comment.className = "comment";
                                }

                                  var deleteBtn = document.createElement("span");
                                  deleteBtn.className = "delete-btn";
                                  deleteBtn.innerHTML = "Eliminar";
                                  deleteBtn.setAttribute("")

                              // Arreglo para almacenar los comentarios
                              var comments = [];

                              // Función para agregar un comentario
                              function addComment() {
                                var commentText = document.getElementById("commentText").value;
                                if (commentText.trim() !== "") {
                                  comments.push(commentText);
                                  displayComments();
                                  document.getElementById("commentText").value = "";
                                }
                              }

                              // Función para eliminar un comentario
                              function deleteComment(index) {
                                comments.splice(index, 1);
                                displayComments();
                              }

                              // Función para mostrar los comentarios en la página
                              function displayComments() {
                                var commentList = document.getElementById("commentList");
                                commentList.innerHTML = "";

                                for (var i = 0; i < comments.length; i++) {
                                  var comment = document.createElement("div");
                                  comment.className = "comment";

                                  var deleteBtn = document.createElement("span");
                                  deleteBtn.className = "delete-btn";
                                  deleteBtn.innerHTML = "Eliminar";
                                  deleteBtn.setAttribute("onclick", "deleteComment(" + i + ")");

                                  comment.innerHTML = comments[i];
                                  comment.appendChild(deleteBtn);

                                  commentList.appendChild(comment);
                                }
                              }
                            </script>




                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>