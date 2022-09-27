<?php

include 'conexao.php';

$numeroProduto  = $_POST ['numeroProduto'];
$nomeProduto    = $_POST ['nomeProduto'];
$qtdProduto     = $_POST ['qtdProduto'];
$catProduto     = $_POST ['catProduto'];
$fornProduto    = $_POST ['fornProduto'];

$sql = "INSERT INTO `produtos`(`numeroProduto`, `nomeProduto`, `qtdProduto`, `catProduto`, `fornProduto`) 
VALUES ($numeroProduto,'$nomeProduto',$qtdProduto,'$catProduto','$fornProduto')";

$inserir = mysqli_query($conexao,$sql);

?>