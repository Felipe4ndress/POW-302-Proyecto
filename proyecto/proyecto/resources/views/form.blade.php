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