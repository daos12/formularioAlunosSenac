<?php

    include 'conexao.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM `produtos` WHERE idProduto = $id";

    $deletar = mysqli_query($conexao,$sql);
?>

<div class="container" style="width:300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <h4>Produto Deletado com sucesso!</h4>

    <div>
        <a href="listarProduto.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>