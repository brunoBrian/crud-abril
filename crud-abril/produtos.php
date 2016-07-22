<?php

require('./models/Produto.php');

$produtos = new Produto();
$lista = $produtos->lista();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Crud</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
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
        <h1>Lista de Produtos <small></small></h1>
        <a href="form-produtos.php" class="btn btn-primary pull-right">Novo produto</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Criação</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($lista as $item){
            ?>


            <tr>
                <td><?=date('d/m/Y H:i', strtotime($item['criacao']))?></td>
                <td><?=$item['nome']?></td>
                <td><?=$item['preco']?></td>
                <td>
                    <button class="btn btn-warning">Editar</button>
                    <button class="btn btn-danger">Excluir</button>
                </td>
            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>

</div>
</body>
</html>
