<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
        <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
    <div style="text-align: center; margin-top: 40px; margin-bottom: 40px;">
        <h4>Seu produto foi inserido ao estoque.</h4>
        <a href="index.php" class="btn btn-primary btn-sm active" role="button" aria-pressed="true" style="margin-top: 40px"> Cadastrar novo item</a>
        <a href="listar.php" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true" style="margin-top: 40px"> Ver itens cadastrados</a>
    </div>

<?php
require_once 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque` (`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ('$nroproduto',
'$nomeproduto', '$categoria', '$quantidade', '$fornecedor')";
//print_r($sql);
$inserir = mysqli_query($conexao,$sql);
//var_dump($inserir);
?>
