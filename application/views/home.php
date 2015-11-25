<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Biblioteca do Saber | Home
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap.min.css"
    />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-1.11.3.min.js">
    </script>
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/bootstrap.min.js">
    </script>
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
<main id="content" class="container">
    <section id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
            </li>
            <li data-target="#carousel-example-generic" data-slide-to="1">
            </li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <article class="item active">
                <img src="<?php echo base_url();?>static/img/imagem5.jpg" alt="" class="img-responsive"
                />
                <div class="carousel-caption">
                    <h2>
                        Brasil é arte
                    </h2>
                    <h4>
                        Conheça mais sobre a literatura brasileira
                    </h4>
                    <br>
                </div>
            </article>
            <article class="item">
                <img src="<?php echo base_url();?>static/img/imagem4.jpg" alt="" class="img-responsive"
                />
                <div class="carousel-caption">
                    <h2>
                        Cuidado com o vencimento
                    </h2>
                    <h4>
                        Não esqueça das datas de devolver o livro e atualizar sua conta
                    </h4>
                    <br>
                </div>
            </article>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button"
            data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button"
            data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
        </div>
    </section>
    <section id="services">
        <!-- Row of columns -->
        <br>
        <br>
        <header>
            <h3 class="text-center">
                Serviços oferecidos para os usuários
            </h3>
        </header>
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <hr>
                <h4>
                    Consulta no acervo
                </h4>
                <p>
                    Os usuário cadastrados podem pesquisar pela base de dados da biblioteca
                    o livro que deseja.
                </p>
            </div>
            <div class="col-md-4 col-xs-6">
                <hr>
                <h4>
                    Reserva de obras
                </h4>
                <p>
                    Todas as obras poderão ser reservadas pessoalmente por alunos e professores
                    da nossa instituição.
                </p>
            </div>
            <div class="col-md-4 col-xs-6">
                <hr>
                <h4>
                    Central de informações
                </h4>
                <p>
                    A biblioteca do saber oferece uma central de informação em sua biblioteca
                    fisica.
                </p>
            </div>
        </div>
        <br>
        <br>
        <header>
            <h3 class="text-center">
                Notícias
            </h3>
        </header>
        <hr>
        <div class="row">
            <?php foreach($news as $item ){ echo
            "<div class='col-md-3 col-xs-6'><img src='" . $item->
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
    </section>
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