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

<div class="container" style="width:300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <h4>Produto Cadastrado com Sucesso!</h4>

    <div>
        <a href="index.html" role="button" class="btn btn-sm btn-secondary">Cadastrar novo Ítem</a>
    </div>
</div>