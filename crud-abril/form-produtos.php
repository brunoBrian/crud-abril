<?php

require('./models/Produto.php');



$produto = new Produto();

$nome = isset($_POST['nome'])?$_POST['nome']:'';
$descricao = isset($_POST['descricao'])?$_POST['descricao']:'';
$preco = isset($_POST['preco'])?$_POST['preco']:'';

if(!empty($nome) && !empty($descricao) && !empty($preco)){
    $save = $produto->criar($nome, $descricao, $preco);
    if($save){
        header('Location: produtos.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pedidos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Crud</a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Pedidos <span class="sr-only">(current)</span></a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li class="active"><a href="produtos.php">Produtos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header">
        <h1>Formulário de produtos <small></small></h1>
    </div>

    <form method="post">
        <fieldset class="form-group">
            <label for="nome">Nome</label>
            <input value="<?=$nome?>" type="text" class="form-control" id="nome" name="nome">
        </fieldset>
        <fieldset class="form-group">
            <label for="email">Descrição</label>
            <input value="<?=$descricao?>" type="text" class="form-control" id="descricao" name="descricao">
        </fieldset>
        <fieldset class="form-group">
            <label for="telefone">Preço</label>
            <input value="<?=$preco?>" type="text" class="form-control" id="preco" name="preco">
        </fieldset>
        <fieldset class="form-group">
            <button class="btn btn-success">Salvar</button>
        </fieldset>
    </form>
</div>
</body>
</html>
