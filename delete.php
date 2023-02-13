<?php
include_once('conexao.php');


$id = (int)$_GET['id'];

$sql="DELETE FROM produtos WHERE id = $id";


$result =mysqli_query($conn,$sql);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
     
    
    } 

header('location: produtos.php');
