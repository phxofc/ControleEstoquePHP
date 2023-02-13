<?php
include_once('conexao.php');

if (isset($_POST['update'])) {


    $id = $_POST['id'];
    $nomeP = $_POST['nomeP'];
    $precoC = $_POST['precoC'];
    $precodeV = $_POST['precodeV'];
    $quantidade = $_POST['quantidade'];

    $sql = "UPDATE produtos SET nomeP = '$nomeP', precoC = '$precoC', precodeV = '$precodeV', quantidade = '$quantidade' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        //echo "<script>alert('Produto não existe')</script>";

    } else {
        echo "<SCRIPT>
  alert('Produto: ($nomeP) Atualizado com Sucesso!')
  window.location.replace('produtos.php');
</SCRIPT>";
    }
}


