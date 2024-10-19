<!--Muestra el juego seleccionado individualmente, con mas detalles. Se vuelve a tomar la ID con un input hidden-->

{include file='templates/header.tpl'}



<div class="border m-4 position absolute top-50">

    <input type="hidden" value="{$game->ID_Juego}">
    
    <ul class="list-group">
    
      <li class="list-group-item list-group-item-light fs-5">Nombre:</li>
      <li class="list-group-item list-group-item-info fs-5">{$game->Nombre}</li>
   
      <li class="list-group-item list-group-item-light fs-5">Fecha:</li>
      <li class="list-group-item list-group-item-info fs-5">{$game->Fecha}</li>
  
      <li class="list-group-item list-group-item-light fs-5">Precio:</li>
      <li class="list-group-item list-group-item-info fs-5">{$game->Precio}</li>
    
      <li class="list-group-item list-group-item-light fs-5">Descripcion: </li>
      <li class="list-group-item list-group-item-info fs-5">{$game->Descripcion}</li>
   
    </ul>
    {if isset($smarty.session.USER_ID)}

    <a href='editGame/{$game->ID_Juego}' type='button' class='btn btn-warning ml-auto'>Editar</a>

  {{/if}}

</div>

{include file='templates/footer.tpl'}