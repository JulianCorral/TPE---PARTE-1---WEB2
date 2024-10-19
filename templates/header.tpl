<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Catalogo Videojuegos</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a  class="navbar-brand" href="{BASE_URL}">Catalogo Videojuegos</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">Home</a>
                  </li>
                  {if !isset($smarty.session.USER_ID)}
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="login">Login</a>
                    </li>
                  {else} 
                    <li class="nav-item ml-auto">
                      <a class="nav-link" aria-current="page" href="logout">Logout ({$smarty.session.USER_USUARIO})</a>
                    </li>
                  {/if}
                </ul>
              </div>
               
            </div>
          </nav>
    </header>

    <main class="container">