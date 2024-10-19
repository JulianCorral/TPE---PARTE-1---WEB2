
{include file='templates/header.tpl'}



<div class="border m-4 position absolute top-50">
    <input type="hidden" name="genre" value="{$genre->Genero_ID}">
        
        <ul class="list-group">

            <li class="list-group-item list-group-item-light fs-5">Genero:</li>
            <li class="list-group-item list-group-item-info fs-5">{$genre->Genero}</li>
        
            <li class="list-group-item list-group-item-light fs-5">Edad </li>
            <li class="list-group-item list-group-item-info fs-5"> {$genre->Edad}</li>

            <li class="list-group-item list-group-item-light fs-5">Descripcion: </li>
            <li class="list-group-item list-group-item-info fs-5"> {$genre->Descripcion}</li>
        
        </ul>
        {if isset($smarty.session.USER_ID)}
        <a href='editGenre/{$genre->Genero_ID}' type='button' class='btn btn-warning ml-auto'>Editar</a>
        {{/if}}

</div>

{include file='templates/footer.tpl'}