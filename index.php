<?php

//use Telas;

require_once './classes/sendmessage.php';
require_once './classes/Telas.php';
require_once './lib/phpmailer/class.phpmailer.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Paula Design Floral atende vários segmentos que incluem ornamentação, de forma a oferecer satisfação e beleza para o seu ambiente.">
        <meta name="author" content="Michel Pereira">
        <meta name="keywords" content="paula design floral Paula Design Floral ornamentação flores jardim jardins">
        <meta name="robots" content="paula, design, floral, Paula Design Floral, ornamentação, flores, jardim, jardins">
        <meta name="googlebot" content="paula, design, floral, Paula Design Floral, ornamentação, flores, jardim, jardins">
        <title>Paula Design Floral</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet"> 
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/lightbox.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">


        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>


    </head><!--/head-->

    <body>

        <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>

        <header id="home">
        <?php
        
            $tela = new Telas();

        
        ?>
            <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel" style="position: static;">
                <div class="carousel-inner">
                    <div class="item active" style="background-image: url(images/slider/smanager.jpg);">
                        <div class="caption">
                            <p class="animated fadeInLeftBig">
                                <img src="images/logoMapTI.png" title="MAP TI" width="330" height="200">
                            </p>

                            <p class="animated fadeInRightBig">
                                <span style="">PAULA DESIGN FLORAL</span>
                            </p>
                          <!--<p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>-->
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">
                                Entre em contato
                            </a>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(images/slider/cloud.jpg)">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig" style="font-size: 30px;">
                                Desenvolvimento de <span>Projetos</span>
                            </h1>
                            <p class="animated fadeInRightBig">
                                Projetos de Sistemas, Sites e Cloud Computing. Todos de forma responsiva para dispositivos mobile.
                            </p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">
                                Saiba mais
                            </a>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(images/slider/notebook.jpg)">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig" style="font-size: 30px;">
                                Suporte <span>Remoto</span>
                            </h1>
                            <p class="animated fadeInRightBig">
                                Atendimento remoto a computadores e notebooks, Redes local e wi-fi
                            </p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">
                                Saiba mais
                            </a>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(images/slider/fundoRestrito.jpg)">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig" style="font-size: 30px;">
                                Acesso <span>Restrito</span>
                            </h1>
                            <p class="animated fadeInRightBig">
                                Acesso exclusivo para clientes e futuros clientes.
                            </p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="restrito/acesso.php">
                                Acesse aqui
                            </a>
                        </div>
                    </div>
                </div>
                <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

            </div><!--/#home-slider-->
                <div class="team-members">
                    <div class="row">
                        <div class="col-sm-3">
                            &nbsp;
                        </div>
                        <div class="col-sm-6">
                            <div class="team-member" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <!--<div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">-->
                                <div class="member-image">
                                    <img class="img-responsive" src="images/team/michelPereira.jpg" alt="">
                                </div>
                                <div class="member-info">
                                    <h3>Michel Pereira</h3>
                                    <h4>CEO &amp; Fundador</h4>
                                    <p>
                                        Analista de Sistemas, Desenvolvedor e Analista BD
                                    </p>
                                </div>
                                <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a class="facebook" href="https://www.facebook.com/pereira.michel1" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="https://www.twitter.com/pereiramichel" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="linkedin" href="https://br.linkedin.com/in/pereiramichel" target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dribbble" href="https://dribbble.com/pereiramichel" target="_blank">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="envelope" href="mailto:pereira.michel@gmail.com" title="pereira.michel@gmail.com" target="_blank">
                                                <i class="fa fa-envelope" title="pereira.michel@gmail.com"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            &nbsp;
                        </div>            
                    </div>
                </div>            
            </div>
        </section><!--/#team-->

        <section id="contact">
            <!--    <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>-->
            <div id="contact-us" class="parallax">
                <div class="container">
                    <div class="row">
                        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>Contato</h2>
                            <p>
                                Entre em contato para qualquer informação, solicitação, orçamento, elogios, sugestões etc. Seu contato e sempre bem-vindo. Favor preencher todos os campos.
                            </p>
                        </div>
                    </div>
                    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-sm-6">
                                <div style="display: none;" id="mensagem">
                                    <p><i class='fa fa-spinner fa-spin'></i> Enviando...</p>
                                </div>
                                <div style="display: none;" id="sucesso">
                                    <p class="text-success" id="mensagemSucesso"><b>Obrigado pelo seu contato. Brevemente, entraremos em contato.</b></p>
                                </div>
                                <div style="display: none;" id="erro">
                                    <p class="text-alert" id="mensagemErro">Ocorreu um erro. Tente novamente mais tarde ou envie para o e-mail michel@mapti.com.br, do seu navegador.</p>
                                </div>

                                <form id="contact-form" name="contact-form" method="post" action="#contact">
                                    <!--                <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">-->
                                    <div class="row wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Nome" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Endereço de E-mail" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="titulo" class="form-control" placeholder="Assunto" required="required">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="mensagem" id="mensagem" class="form-control" rows="4" placeholder="Digite sua mensagem" required="required"></textarea>
                                    </div>                        
                                    <div class="form-group">
                                        <button type="submit" class="btn-submit" onclick="javascript: ativaMensagem()">Enviar</button>
                                    </div>
                                </form>

                            </div>
                            <div class="col-sm-6">
                                <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <p>
                                        Preencha todos os campos. Fique à vontade para qualquer forma de comunicação.
                                    </p>
                                    <ul class="address">
                                        <li><i class="fa fa-map-marker"></i> <span> Endereço:</span> Rua dos Tintureiros, 213 </li>
                                        <li><i class="fa fa-phone"></i> <span> Telefone:</span> +55 21 3591-1534  </li>
                                        <li><i class="fa fa-whatsapp"></i> <span> Whatsapp:</span> +55 21 98243-1674  </li>
                                        <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:michel@mapti.com.br"> michel@mapti.com.br</a></li>
                                        <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.mapti.com.br</a></li>
                                    </ul>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </section><!--/#contact-->
        <footer id="footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p>&copy; 2016 MAP TI</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
        <script type="text/javascript" src="js/jquery.inview.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/mousescroll.js"></script>
        <script type="text/javascript" src="js/smoothscroll.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

        <script>
            function ativaMensagem() {
                document.getElementById('sucesso').style.display = "none";
                document.getElementById('erro').style.display = "none";
                document.getElementById('mensagem').style.display = "block";
            }

        </script>

        <?php
        error_reporting(E_ALL);
        error_reporting(E_STRICT);
        $ip = getenv("REMOTE_ADDR");
        if ($_POST) {
            $send = new sendmessage();

            $nome = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email');
            $titulo = filter_input(INPUT_POST, 'titulo');
            $mensagem = filter_input(INPUT_POST, 'mensagem');

            $send->setNome($nome);
            $send->setEmail($email);
            $send->setTitulo($titulo);
            $send->setMensagem($mensagem);
            $send->enviaMensagem();
        }
        ?>                

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-75005756-1', 'auto');
            ga('send', 'pageview');

        </script>

    </body>
</html>