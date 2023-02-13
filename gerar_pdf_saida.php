
<?php


//conexao
session_start();
include_once('conexao.php');
// carregar o composer
require './vendor/autoload.php';



$valorLucro =0;

$data_inicial = filter_input(INPUT_GET,'data_inicial',FILTER_DEFAULT);
$data_final = filter_input(INPUT_GET,'data_final',FILTER_DEFAULT);



if((!empty($data_inicial)) and (!empty($data_final))){
    $sql = "SELECT * FROM vendasprodutos WHERE dataInserido BETWEEN '$data_inicial' and '$data_final' ORDER BY idVendas DESC;";

    $result =mysqli_query($conn,$sql);
       mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  
       if (!$result) {
           echo "Error: " . mysqli_error($conn);
       } 

     

}else{

    $sql = "SELECT * FROM vendasprodutos ORDER BY idVendas DESC;";

    $result =mysqli_query($conn,$sql);
       mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  
       if (!$result) {
           echo "Error: " . mysqli_error($conn);
       } 
       
    
}






   $dados =  "<!DOCTYPE html>";
   $dados .=   "<body>";
   $dados .= "<h1> Lista das saidas</h1>";


   if(($result)and ($result->num_rows !=0)){

    while ($value = mysqli_fetch_assoc($result)){
        extract($value);
        $dados .= "ID: " . $value['idVendas'] ."<br>";
        $dados .= "PREÇO DE VENDA DO PRODUTO: " . $value['precoVenda'] ."<br>";
        $dados .= "QUANTIDADE: " . $value['quantidade'] ."<br>";
        $dados .= "DATA DA VENDA: " . $value['dataInserido'] ."<br>";
        $dados .= "LUCRO DO PRODUTO: " . $value['quantidade']*$value['precoVenda'] ."<br>";
        $dados .= "===================================================== <br>";
        $valorLucro +=$value['quantidade']*$value['precoVenda'];
    }

}

$dados .="<p>O valor total do LUCRO é: $valorLucro</p>";

$dados .="</body>";
$dados .="</html>";



//referenciar
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf =new Dompdf(['enable_remore'=>true]);
//enviar conteudo pdf
$dompdf->loadHtml($dados);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// rederizar
$dompdf->render();

// gerar pdf
$dompdf->stream();



?> 
