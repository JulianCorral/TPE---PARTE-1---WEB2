{include 'header.tpl'}
<!--Formulario que se utiliza para logearse y poder tener la funcionalidad de ABM, con un IF que si esta mal la contraseña se enviara un mensaje-->

<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="user">Usuario</label>
            <input type="text" required class="form-control" id="user" name="user"required>
        </div>
        <div class="form-group">
            <label for="password">contrase&ntilde;a</label>
            <input type="password" required class="form-control" id="password" name="password"required>
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>

{include file='footer.tpl'}