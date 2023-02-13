


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
        <form action="vendasClass.php" method="POST">
            <fieldset>
                <legend><b>Frente Caixa</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="idProduto" id="idProduto" class="inputUser" required>
                    <label for="idProduto" class="labelInput">Código do Produto</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="precoVenda" id="precoVenda" class="inputUser" required>
                    <label for="precoVenda" class="labelInput">Preço da Venda</label>
                </div>
                
                <br><br>
                <div class="inputBox">
                    <input type="text" name="quantidade" id="quantidade" class="inputUser" required>
                    <label for="quantidade" class="labelInput">Quantidade</label>
                </div>
                <br><br>
                
                <input  type="submit" value="Finalizar" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>