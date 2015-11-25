<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Biblioteca do Saber | Dúvidas Frequentes
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
            <li>
                <a href="home">Home</a>
            </li>
            <li>
                <a href="inst">Institucional</a>
            </li>
            <li>
                <a href="noticia">Noticias</a>
            </li>
            <li class="active">
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
                Dúvidas Frenquentes
            </h2>
        </header>
        <hr>
        <br>
        <p>
            Para esclarecimento de dúvidas, clique nas perguntas, caso não for do
            entendimento nos envie um email através do formulario:
            <a href="fale">Clique aqui</a>
        </p>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
				  Quem pode alugar o livro
				</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                aria-labelledby="headingOne">
                    <div class="panel-body">
                        Todos aqueles que tenham feito cadastro e comprido o prazo de vencimento
                        dos materiais.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				  Como faço para cadastrar meu endereço de e-mail? 
				</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                aria-labelledby="headingTwo">
                    <div class="panel-body">
                        Todo usuário tem a opção de cadastrar um endereço de e-mail de sua escolha
                        como e-mail preferencial na Biblioteca. O e-mail é uma ferramenta importante,
                        pois através dele, o usuário recebe avisos de devolução de materiais, de
                        liberação de reservas e comprovantes de renovação.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				  Serei avisado do vencimento do prazo de empréstimo? 
				</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                aria-labelledby="headingThree">
                    <div class="panel-body">
                        Sim. O sistema envia automaticamente aos usuários com e-mail cadastrado,
                        um aviso de vencimento com 2 dias de antecedência do prazo de empréstimo.Porém,
                        o eventual não recebimento do e-mail por problemas técnicos, não isenta
                        o usuário do compromisso de cumprir os prazos. Portanto, verifique sempre
                        os prazos de vencimento dos livros em seu poder.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					Posso doar materiais bibliográficos para a Biblioteca?
					</a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                aria-labelledby="headingFour">
                    <div class="panel-body">
                        Sim. Os doadores deverão assinar o "Formulário de Doação" presente em
                        nossa biblioteca presencial, concordando que o material seja acervado de
                        acordo com os critérios e a necessidade da biblioteca.
                    </div>
                </div>
            </div>
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