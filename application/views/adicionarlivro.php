<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Biblioteca do Saber | Administração
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap.min.css"
    />
    <!-- CSS local -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/principal.css"
    />
</head>
<!--Header-->
<div class="container">
    <header id="header" class="row">
        <div class="col-md-4 col-xs-6">
            <a href="home"><img src="<?php echo base_url();?>static/img/logo.jpg" alt="Logo da biblioteca do saber" class="img-responsive"/></a>
        </div>
    </header>
</div>
<!--Fim do Header-->
<!--Nav-->
<nav class="navbar navbar-inverse">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="adicionarlivro">Adicionar Livro</a>
            </li>
            <li>
                <a href="adicionaraluno">Adicionar Aluno</a>
            </li>
            <li>
                <a href="adicionarfuncionario">Adicionar Funcionario</a>
            </li>
            <li>
                <a href="adicionarnoticia">Adicionar Notícia</a>
            </li>
            <li>
                <a href="mostralivro">Livros cadastrados</a>
            </li>
            <li>
                <a href="mostracontatos">SAC</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="logout">Sair  <em class="glyphicon glyphicon-off"></em></a>
            </li>
        </ul>
    </div>
</nav>
<!--Fim do Nav-->
<main id="content">
    <div class="container">
        <header>
            <h2 class="text-center">
                Adicionando livros
            </h2>
        </header>
        <hr>
        <br>
        <div class="well">
            <form class="form-horizontal" action="/index.php/Controleadmin/livro"
            method="POST">
                <div class="form-group">
                    <label for="titulo" class="col-sm-2 control-label">
                        Titulo:
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="titulo" id="titulo" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="autor" class="col-sm-2 control-label">
                        Autor:
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="autor" id="autor" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lancamento" class="col-sm-2 control-label">
                        Lançamento:
                    </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="lancamento" id="lancamento" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exemplar" class="col-sm-2 control-label">
                        Numero de exemplares:
                    </label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="exemplar" id="exemplar" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="assunto" class="col-sm-2 control-label">
                        Assunto:
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" name="assunto" id="assunto" required>
                        </textarea>
                    </div>
                </div>
                <div class="text-right">
                    <input class="btn btn-default" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</main>
<footer>
    <section id="info" class="destaque">
        <div class="container">
            <div class="row">
                <br>
                <div class="col-md-5">
                    <h6>
                        Biblioteca do Saber
                    </h6>
                    <h6>
                        Praça da Água, 2 - 13 3355-1000 | Lg. Maria de Lurdes, 24 - 13 3381-4890
                    </h6>
                    <h6>
                        Segunda a Sexta das 10h às 17h30 com permanência até as 18h.
                    </h6>
                </div>
            </div>
        </div>
        <br>
    </section>
    <h6 class="text-center">
        ©2015 Copyright Andressa e Roberto - Todos os direitos reservados.
    </h6>
</footer>