<?php if(!class_exists('Rain\Tpl')){exit;}?><head>
	<title></title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
</head>
<body>
	
	

	<div class="container topo">

	<div class="row">
		
	<div class="col-sm">	
		<img src="view/img/logoitego.png" class="rounded float-left espaco-topo espaco-bottom" alt="Logo do ITEGO">
	</div>
	<div class="col-sm">
		<img src="view/img/logotopo.png" class="rounded float-right espaco-topo espaco-bottom" alt="Logo do topo">
	</div>
 
	</div>
</div>
<div class="container topo">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary topo">
  <a class="navbar-brand" href="itego/index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="itego/avaliacao.php">Avaliação</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Livros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="itego/acervo.php">Acervo</a>
          <a class="dropdown-item" href="itego/emprestimo.php">Empréstimo</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Conta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="itego/cadastro.php">Cadastre-se</a>
          <a class="dropdown-item" href="itego/login.php">Entrar</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
</body>