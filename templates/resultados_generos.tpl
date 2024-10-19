

<!--Muestra los resultados de lo buscado por el usuario en los Input. En este caso el usuario ingresa el GENERO o una aproximacion al GENERO y lista todos los items(JUEGOS) que pertenecen a dicho GENERO-->
{include file='templates/header.tpl'}

<div class="border m-4 position absolute top-50">
<h1 class="display-3 text-center"> El resultado de tu busqueda es: </h1>
       
    {foreach $results as $rf}
        <div class="border m-4 position absolute top-50">
        <ul class="list-group">
            <li class="list-group-item"> <b> Nombre:  </b>{$rf->Nombre} </li>
            <li class="list-group-item"> <b> Fecha: </b>{$rf->Fecha} </li>
            <li class="list-group-item"> <b> Precio: </b>  {$rf->Precio } </li>
            <li class="list-group-item"> <b> Descripcion: </b> {$rf->Descripcion}  </li>
            <li class="list-group-item"> <b> Genero: </b> {$rf->Genero_ID} </li>
        </ul>
        </div>
    {/foreach}

</div>
{include file='templates/footer.tpl'}