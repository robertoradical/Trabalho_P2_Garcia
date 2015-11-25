<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Biblioteca do Saber | Usuario
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
                <a href="home">Home</a>
            </li>
            <li>
                <a href="inst">Institucional</a>
            </li>
            <li>
                <a href="noticia">Noticias</a>
            </li>
            <li>
                <a href="duvida">Dúvidas Frequentes</a>
            </li>
            <li>
                <a href="fale">Fale conosco</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="login">Área exclusiva  <em class="glyphicon glyphicon-user"></em></a>
            </li>
        </ul>
    </div>
</nav>
<!--Fim do Nav-->
<main id="content">
    <div class="container">
        <header>
            <h2 class="text-center">
                Área Exclusiva
            </h2>
        </header>
        <hr>
        <br>
        <p>
            Você já esta logado, Para sair
            <a href="logoutuser">clique aqui</a>
        </p>
        <p>
            Deseja voltar para sua conta ?
        </p>
        <a href="area"><button class="btn btn-default">Voltar</button></a>
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