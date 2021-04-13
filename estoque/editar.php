<?php
include 'conexao.php';

$id= $_GET['id'];
?>
<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <title>Edicao do estoque</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
    #tamanhocontainer {
    width: 500px;
        }
        #botao {
            background-color: #006400; /* COR DE FUNDO DO BOTAO*/
            color: #ffffff; /*COR DA LETA=RA DO BOTAO*/
        }
    </style>
</head>
<body>

<div class="container" id="tamanhocontainer" style="margin-top: 40px;">
    <h4>Formulario de Cadastro</h4>
    <form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
        <?php
        $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
        $buscar = mysqli_query($conexao,$sql);
        while ($array=mysqli_fetch_array($buscar)){
            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];



        ?>
        <div class="form-group">
            <label>Numero produto</label>
            <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto?>" disabled>
            <input type="number" class="form-control" name="id" value="<?php echo $id?>" style="display: none">
        </div>
        <div class="form-group">
            <label>Nome produto</label>
            <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto?>">
        </div>

        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control" name="categoria" value="<?php echo $categoria?>">
                <option>Hardware</option>
                <option>Jogos</option>
                <option>Perifericos</option>
                <option>Software</option>
            </select>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade?>">
        </div>


        <div class="form-group">
            <label>Fornecedor</label>
            <select class="form-control" name="fornecedor" value="<?php echo $fornecedor?>">
                <option>Fornecedor 1</option>
                <option>Fornecedor 2</option>
                <option>Fornecedor 3</option>
            </select>
        </div>
        <div style="text-align: right;">
            <button type="submit" style="margin-top: 40px" id="botao" class="btn btn-sm"> Salvar </button>
        </div>
        <?php } ?>
    </form>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


</body>
</html>
 