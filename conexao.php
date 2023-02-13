<?php
//conexao
//$pdo = new PDO('mysql:host=localhost;dbname=vendas','root','root');
//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$server = "localhost";
$user ="root";
$pass = "root";
$bd="vendas";

$conn = new mysqli($server,$user,$pass,$bd);
if($conn->connect_errno){
    echo "falha ao conectar: ("  . $conn->connect_errno . ") " .$conn->connect_error;
    
}else{
    
}

