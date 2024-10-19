{include file='templates/header.tpl'}
<div>
<h2 class="display-5" id="asd" style="text-align: right">Catalogo de Juegos</h2>
</div>

<h3 class="display-5"> Seccion Juegos: </h3>


<ul class="list-group">
{foreach $games as $game}
    
   <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span>
             <b>Juego: </b><a href="game/{$game->ID_Juego}"> {$game->Nombre}</a>

              <b>Genero: </b>{$game -> Genero}

              </span>

                <div class="ml-auto">
             {if isset($smarty.session.USER_ID)}
             <a href='editGame/{$game->ID_Juego}' type='button' class='btn btn-warning ml-auto'>Editar</a>
             <a href='deleteGame/{$game->ID_Juego}' type='button' class='btn btn-dark ml-auto'>Borrar</a>
            {{/if}}
             </div>
          
    </li>
{/foreach}
</ul>
{if isset($smarty.session.USER_ID)}
{include file='templates/form_insertar_Juego.tpl'}
{{/if}}
{include file='templates/form_buscador.tpl'}

