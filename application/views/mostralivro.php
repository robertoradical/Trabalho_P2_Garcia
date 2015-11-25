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
            <li>
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
            <li class="active">
                <a href="mostralivro">Livros Cadastrados</a>
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
<main id="content" class="container">
    <header>
        <h2 class="text-center">
            Lista de livros cadastrados
        </h2>
    </header>
    <hr>
    <br>
    <?php foreach($livro as $item ){ echo
    "<dl class='dl-horizontal well well-sm'>"; echo "<dt>Titulo:</dt><dd>" . $item->
        nm_titulo . "
        </dd>
        "; echo "
        <dt>
            Autor:
        </dt>
        <dd>
            " . $item->nm_autor ."
        </dd>
        " ; echo "
        <dt>
            Data de lançamento:
        </dt>
        <dd>
            " . $item->dt_lancamento . "
        </dd>
        "; echo "
        <dt>
            Numero de exemplares:
        </dt>
        <dd>
            " . $item->nr_exemplar . "
        </dd>
        "; echo "
        <dt>
            Assunto:
        </dt>
        <dd>
            " . $item->ds_assunto . "
        </dd>
        "; echo "
        </dl>
        "; } ?>
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