<?php
//conexao
session_start();
include_once('conexao.php');


if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "select * from produtos where id = $id";
  $result = mysqli_query($conn,$sql);
       
    

   while ($value = mysqli_fetch_assoc($result)){
 
        $nomeP = $value['nomeP'];
        $precoC = $value['precoC'];
        $precodeV =  $value['precodeV'];
        $quantidade = $value['quantidade'];
    }
}


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
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
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomeP" id="nome" value="<?php echo $nomeP ?>"class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Produto</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="precoC" id="precoC" value="<?php echo $precoC ?>" class="inputUser" required>
                    <label for="text" class="labelInput">Preço Produto</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="precodeV" id="precodeV" value="<?php echo $precodeV ?>" class="inputUser" required>
                    <label for="telefone" class="labelInput">Preço de Venda</label>
                </div>



                <br><br>
                <div class="inputBox">
                    <input type="text" name="quantidade" id="quantidade" value="<?php echo $quantidade ?>" class="inputUser" required>
                    <label for="cidade" class="labelInput">Quantidade</label>
                </div>
                <br><br>

                <br><br>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" id="update">
            </fieldset>

            
        </form>
    </div>
</body>

</html>