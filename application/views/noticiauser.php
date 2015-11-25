<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Biblioteca do Saber | Notícia
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
            <li class="active">
                <a href="noticiauser">Noticias</a>
            </li>
            <li>
                <a href="duvidauser">Dúvidas Frequentes</a>
            </li>
            <li>
                <a href="consultauser">Consulta ao acervo</a>
            </li>
            <li>
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
                Notícias
            </h2>
        </header>
        <hr>
        <br>
        <div class="row">
            <?php foreach($news as $item ){ echo
            "<div class='col-md-6 col-xs-6'><img src='" . $item->
                lk_foto . "' alt='' width='100%' class='img-responsive'/>"; echo "
                <h4>
                    " . $item->nm_titulo . "
                </h4>
                "; echo "
                <p>
                    " . $item->ds_assunto . "
                </p>
        </div>
        "; } ?>
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