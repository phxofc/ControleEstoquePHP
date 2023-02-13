<!DOCTYPE html>
<html lang="pt-br">


<?php

//conexao com banco
session_start();
include_once('conexao.php');

if (isset($_POST['submit'])) {

    $data_inicial = $_POST['data_inicial'];
    $data_final = $_POST['data_final'];

    $sql = "SELECT * FROM vendasprodutos WHERE dataInserido BETWEEN '$data_inicial' and '$data_final';";

    $result = mysqli_query($conn, $sql);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

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

    <div class="box">
        <form action="" method="POST">
            <fieldset>
                <legend><b>Relatório de Saida</b></legend>

                <br>
                <label for="data_inicial"><b>Data Inicial:</b></label>
                <input type="date" name="data_inicial" id="data_inicial">
                <br>

                <br>
                <label for="data_final"><b>Data Final:</b></label>
                <input type="date" name="data_final" id="data_final">
                <br>

                <br><br>
                <input type="submit" name="submit" id="submit" value="Pesquisar">


                <style>
                    
                .botao2,.botao1 {
                    display: table;
                    margin-left: auto;
                    margin-right: auto;

                }

                        
                    
                </style>
                <?php

                //receber dados do forms
                if ((isset($data_inicial)) and (isset($data_final))) {
                    echo ("<div class = 'botao1'> <a href='gerar_pdf_saida.php?data_inicial=" . $data_inicial . "&data_final=" . $data_final . "'>GERAR PDF DA PESQUISA</a> <br> </div>");
                } else {
                    echo ("<div class ='botao2'> <a href='gerar_pdf_saida.php'>GERAR PDF DE TODOS</a> <br> </div>");
                }

                ?>
            </fieldset>
        </form>
    </div>




</body>

</html>