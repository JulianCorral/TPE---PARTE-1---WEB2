{include file='templates/header.tpl'}
<!--Formulario que se utiliza para editar un juego, con un Input en modo Hidden para tomar la ID de dicho juego-->

<form class="form-alta border m-4 position absolute top-50" action="editGameBd" method="POST">
<input type="hidden" name="ID_Juego" value="{$game->ID_Juego}">

<div class="form-group row margin-15px">
  <label for="name" class="col-sm-2 col-form-label"><b>Nombre:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="name" value="{$game->Nombre}"required>
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="lastname" class="col-sm-2 col-form-label"><b>Fecha:</b></label>
  <div class="col-sm-10">
    <input type="date" class="form-control" name="fecha" value="{$game->Fecha}" required >
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="age" class="col-sm-2 col-form-label"><b>Precio:</b></label>
  <div class="col-sm-10">
    <input type="number" class="form-control"  value="{$game->Precio}" name="precio" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="age" class="col-sm-2 col-form-label"><b>Descripcion:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control"  value="{$game->Descripcion}" name="descripcion" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="Genero_ID" class="col-sm-2 col-form-label"><b>Genero:</b></label>
  <div class="col-sm-10">
    <select class="form-select" name="Genero_ID">
    {foreach $genres as $genre}
      <option value={$genre->Genero_ID}> {$genre->Genero} </option>
    {/foreach}
    </select>
  </div>
</div>


<div class="form-group row margin-15px">
  <div class="col-sm-10  btn-sub-center">
    <button type="submit" class="btn btn-success">Editar Juego</button>
  </div>
</div>
</form>

</div>


{include file='templates/footer.tpl'}
