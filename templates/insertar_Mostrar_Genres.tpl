<!--Seccion generos que muestra el formulario para agregar y los botones para editar/borrar solo si estas logeado.-->


<h3 class="display-5"> Seccion Generos: </h3>


<ul class="list-group">
{foreach $genres as $genre}
    
    <li class='list-group-item d-flex justify-content-between align-items-center'>
        
        <span>
        <b>Generos: </b><a href="genre/{$genre->Genero_ID}"> {$genre->Genero}</a>
        
        <b>Edad: </b> {$genre->Edad} 
        </span> 

         <div class="ml-auto">
        {if isset($smarty.session.USER_ID)}
            <a href='editGenre/{$genre->Genero_ID}' type='button' class='btn btn-warning ml-auto'>Editar</a>
            <a href='deleteGenre/{$genre->Genero_ID}' type='button' class='btn btn-dark ml-auto'>Borrar</a>
        {{/if}}
        </div>
    </li>        
{/foreach}
</ul>
{if isset($smarty.session.USER_ID)}
{include file='templates/form_insertar_Genero.tpl'}
{{/if}}

{include file='templates/footer.tpl'}