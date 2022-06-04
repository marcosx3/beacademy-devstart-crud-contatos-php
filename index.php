<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="./views/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha512-dTu0vJs5ndrd3kPwnYixvOCsvef5SGYW/zSSK4bcjRBcZHzqThq7pt7PmCv55yb8iBvni0TSeIDV8RYKjZL36A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js" integrity="sha512-Mf4TMPxK1TE3jNpbt6cFIM9Rz+Ezs+mvG6SvEKq2ZYEAix8QNtbseSccunI4efVNtvfzrRmd8vVwRRBgYMtfnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>CRUD PHP</title>
</head>
<body>
    <header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/home">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cadastro">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/editar">Editar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/listar">Visualizar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/relatorio">Relatorio</a>
        </li>
    </div>
  </div>
</nav>
</header>
<!-- PHP -->
<?php 

include './controller/acoes.php';

  $url = explode('?', $_SERVER['REQUEST_URI']);
 
  echo match($url[0]){
      '/' => login(),
      '/home' => home(),
      '/cadastro' => cadastrar(),
      '/listar' => listar(),
      '/editar' => editar(),
      '/relatorio' => relatorio(),
      default => erro404() 
  };




?>
    <!-- BOOTSTRAP JS/BUNDLE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>