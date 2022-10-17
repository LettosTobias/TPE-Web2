<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloMovie.css" >
    <title>Peliculas</title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="home">Peliculas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Generos
                </a>
                <ul class="dropdown-menu">
                  {foreach from=$genders item=$gender}
                  
                  <li><a class="dropdown-item" href="gender/{$gender->genero}">{$gender->genero}</a></li>
    
                  {/foreach}
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
                
                {if !isset($smarty.session.USER_ID)}
                  
                    <button class= "btn btn-outline-dark"> <a class="nav-link" href="login" >Login</a></button>
                  
                {else} 
                  <button class= "btn btn-outline-dark"> <a class="nav-link" href="logout" > Logout/ {$smarty.session.USER_NAME}</a></button>   
                {/if}

            </form>
          </div>
        </div>
      </nav>
      
      

    </header>

    <main class="container">