<!--Formulario que se utiliza para insertar un juego a la BD-->
<h3 class="display-5">Llene el formulario y agregue un jugador nuevo:</h3>
<form action='add' form method="POST" class="border m-10 position absolute top-50">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label class="form-label">Nombre</label>
                <input name="nombre" type="text" class="form-control"required>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label class="form-label">Selecciona un genero</label>
                <select name="Genero_ID" class="form-control">
             {foreach $genres as $genre}
                <option value={$genre->Genero_ID}> {$genre->Genero} </option>
             {/foreach}
                    
                </select>
                
            </div>
        </div>
          
    </div>
     <div class="col-9">
            <div class="form-group">
                <label class="form-label">Fecha</label>
                <input name="fecha" type="text" class="form-control"required>
            </div>
        </div>
    <div class="form-group">
        <label class="form-label">Precio</label>
        <input name="precio" class="form-control" rows="3"required>
    </div>
    <div class="form-group">
        <label class="form-label">Descripcion</label>
        <input name="descripcion" class="form-control" rows="3"required>
    </div>
    <div>
    {if isset($smarty.session.USER_ID)}
    <button type="submit" class="btn btn-success">Guardar</button>
    {{/if}}
    </div>
</form>