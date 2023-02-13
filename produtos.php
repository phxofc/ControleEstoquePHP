<?php
//conexao
session_start();
include_once('conexao.php');

//listar
if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "select * from produtos where id like '%$data%' or nomeP like '%$data%' or quantidade like '%$data%' order by id desc";
    $result = mysqli_query($conn, $sql);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
      
    
    }  


} else {
    $sql = "select * from produtos order by id desc";
    $result =  mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
      
    
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

<style>
    .box-search {
        display: flex;
        justify-content: center;
        gap: 1%;
    }
</style>


<body>
    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar Produto" id="pesquisar">
        <button class="btn btn-primary" onclick="searchData();">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </button>
    </div>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço de Compra</th>
                    <th scope="col">Preço de Venda</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($value = mysqli_fetch_assoc($result)) {


                    echo "<tr>";
                    echo "<td>" . $value['id'] . "</td>";
                    echo "<td>" . $value['nomeP'] . "</td>";
                    echo "<td>" . $value['precoC'] . "</td>";
                    echo "<td>" . $value['precodeV'] . "</td>";
                    //verificando o estoque
                    if(empty($value['quantidade']) || $value['quantidade']< 0){
                        echo "<td> Faltando no Estoque  </td>";
                    }else{
                        echo "<td>"    . $value['quantidade'] . "</td>";
                    }
                    
                    echo "<td>

                            

                            <a class ='btn btn-primary btn-sm' href ='editar.php?id=$value[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg>
                            </a>
                            <a class ='btn btn-danger btn-sm' href ='delete.php?id=$value[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                          </svg>
                            </a>
                    </td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>

</body>

<script>
    var search = document.getElementById("pesquisar");
    search.addEventListener("keydown", function(event) {
        if (event.key == "Enter") {
            searchData()
        }

    });


    function searchData() {
        window.location = 'produtos.php?search=' + search.value;
    }
</script>

</html>