<!--Formulario que se utiliza para insertar un genero a la BD-->
<h3 class="display-5">Llene el formulario y agregue un genero nuevo:</h3>
<form action="addGenre" method="POST" class="border m-10 position absolute top-50">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label class="form-label">Genero</label>
                <input name="genero" style="width: 250px" type="text" class="form-control" required>
            </div>
        </div>    
    <div class="form-group">
        <label class="form-label">edad</label>
        <input name="edad" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    <div class="form-group">
        <label class="form-label">Descripcion</label>
        <input name="descripcion" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    {if isset($smarty.session.USER_ID)}
    <button type="submit" class="btn btn-success" style="width: 100px; margin:8px;">Guardar</button>{{/if}}
</form>