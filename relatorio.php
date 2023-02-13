<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>

<header>

  <nav>
    <a class="logo" href="/">Controle Estoque</a>
    <div class="mobile-menu">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    <ul class="nav-list">
      <li><a href="index.php">Início</a></li>
      <li><a href="cadastro.php">Cadastro</a></li>
      <li><a href="produtos.php">Produtos</a></li>
      <li><a href="vendas.php">Vendas</a></li>
      <li><a href="relatorio.php">Relatórios</a></li>
    </ul>
  </nav>

</header>


<body>
  <style>
    .botoes {
      position: absolute;

      width: 50px;
      height: 50px;
      top: 50%;
      left: 50%;
    
    

    
    }

    .img{
      width: 45px;
      width: 45px;
      
    }
  </style>

  <div class="botoes">
    <a href="entradaClass.php"><img class="img" src="https://cdn-icons-png.flaticon.com/512/32/32205.png"> </img>Entrada</a>
    <a href="saidaClass.php"><img class="img" src="https://cdn-icons-png.flaticon.com/512/2457/2457271.png"></img>Saida</a>
  </div>


</body>

</html>