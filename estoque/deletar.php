<?php
include 'conexao.php';

$id= $_GET['id'];
$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container" style="width: 400px;">
    <center>
        <div style="margin-top: 40px">
            <h3>Produto excluido com sucesso!</h3>
        </div>
        <div style="margin-top: 40px">
            <a href="listar.php" class="btn btn-sm btn-primary">Voltar</a>
        </div>
    </center>
</div>