{include file='templates/header.tpl'}

<!--Formulario que se utiliza para editar un genero, con un Input en modo Hidden para tomar la ID de dicho genero-->
<form class="form-alta border m-4 position absolute top-50" action="editGenreBd" method="POST">
<input type="hidden" name="Genero_ID" value="{$genre->Genero_ID}">

<div class="form-group row margin-15px">
  <label for="team" class="col-sm-2 col-form-label"><b>Genero:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="genero" value="{$genre->Genero}"required>
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="league" class="col-sm-2 col-form-label"><b>Edad:</b></label>
  <div class="col-sm-10">
    <input type="number" class="form-control" name="edad" value="{$genre->Edad}" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="technical_director" class="col-sm-2 col-form-label"><b>Descripcion:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="descripcion" value="{$genre->Descripcion}" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <div class="col-sm-10  btn-sub-center">
    <button type="submit" class="btn btn-success">Editar Equipo</button>
  </div>
</div>
</form>

</div>


{include file='templates/footer.tpl'}