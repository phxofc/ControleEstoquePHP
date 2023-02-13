<?php
//conexao
session_start();
include_once('conexao.php');

//comprando

$precoVenda = $_POST['precoVenda'];
$quantidade = $_POST['quantidade'];
$idProduto = $_POST['idProduto'];




//verificando se tem no estoque
$sql = "select quantidade from produtos where id =$idProduto;";
$result =mysqli_query($conn,$sql);

while ($value = mysqli_fetch_assoc($result)){
  if($value['quantidade']<=0){

    
    echo "<SCRIPT>
  alert('PRODUTO FALTANDO NO ESTOQUE ou A quantidade Escolhida Foi Superior a do Estoque')
  window.location.replace('vendas.php');
</SCRIPT>";
     

  }else{

    //inserindo a compra

    $sql2="insert into vendasprodutos(precoVenda,quantidade,ProdutoVendido)
values('$precoVenda','$quantidade','$idProduto');";
   
$result2 =mysqli_query($conn,$sql2);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  
if (!$result2) {
    echo "Error: " . mysqli_error($conn);
  //echo "<script>alert('Produto não existe')</script>";

} else{
  echo "<SCRIPT>
  alert('Venda finalizada!')
  window.location.replace('produtos.php');
</SCRIPT>";
    
   
}   


//dando baixa no estoque
   
$sql3 = "UPDATE produtos SET quantidade = quantidade-$quantidade WHERE id=$idProduto;";


$result3 =mysqli_query($conn,$sql3);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  
if (!$result3) {
    echo "Error: " . mysqli_error($conn);
  //echo "<script>alert('Produto não existe')</script>";

} 



  }
}



      
    

    
    
    
?>

