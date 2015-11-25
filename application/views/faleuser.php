<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Biblioteca do Saber | Fale conosco
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
            <a href="homeuser"><img src="<?php echo base_url();?>static/img/logo.jpg" alt="Logo da biblioteca do saber" class="img-responsive"/></a>
        </div>
        <br>
        <br>
        <div class="col-md-3 col-md-offset-4 col-xs-6">
            <?php echo "<h4>" . $usu . "</h4>"; ?>
        </div>
    </header>
</div>
<!--Fim do Header-->
<!--Nav-->
<nav class="navbar navbar-inverse">
    <div class="container">
        <ul class="nav navbar-nav">
            <li>
                <a href="homeuser">Home</a>
            </li>
            <li>
                <a href="instuser">Institucional</a>
            </li>
            <li>
                <a href="noticiauser">Noticias</a>
            </li>
            <li>
                <a href="duvidauser">Dúvidas Frequentes</a>
            </li>
            <li>
                <a href="consultauser">Consulta ao acervo</a>
            </li>
            <li class="active">
                <a href="faleuser">Fale conosco</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="logoutuser">Sair  <em class="glyphicon glyphicon-off"></em></a>
            </li>
        </ul>
    </div>
</nav>
<!--Fim do Nav-->
<main id="content" class="container">
    <div class="container">
        <header>
            <h2 class="text-center">
                Fale conosco
            </h2>
        </header>
        <hr>
        <br>
        <div class="well">
            <form class="form-horizontal" action="/index.php/Controle/doPost" method="POST">
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">
                        Nome:
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">
                        Email:
                    </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mensagem" class="col-sm-2 control-label">
                        Mensagem:
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" name="mensagem" id="mensagem" required>
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