<!DOCTYPE html>
<!--ALTERAR COR DO SITE EM STYLE.CSS -->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">

    <!-- titulo da pagina-->
    <title>LACIF</title>

    <meta name="author" content="...">

    <!-- ARQUIVOS FAVICON -->
    <link href="../ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="../ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="../ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="../ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="../ico/favicon.png" rel="shortcut icon">

    <!-- ARQUIVOS CSS -->
    <link href="../css/ionicons.min.css" rel="stylesheet">
    <link href="../css/jquery.fancybox.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/datepicker.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet" type="text/css"  />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script type="text/javascript" src="../js/modernizr.custom.js"></script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="../css/styleNoJS.css" />
    </noscript>


    <!-- HTML5 shim e Respond.js para suporte ao IE8 de elementos HTML5 e consultas de mídia -->
    <!-- AVISO: Respond.js não funciona se você visualizar a página via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<header>
    <!-- menu cabeçalho -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-5"></div>
                <!-- end col-3 -->
                <div class="col-md-6 col-sm-5 hidden-xs">
                    <form>
                        <label>
                            <input type="text" placeholder="Posso ajudar?">
                            <input type="submit" value="BUSCAR">
                        </label>
                    </form>
                    <!-- end form -->
                </div>
                <!-- end col-6 -->
                <div class="col-md-3 col-sm-4 col-xs-7">
                    <ul class="language">
                        <li><a href="exames.php">Exames</a></li>
                        <li><a href="../Crud_Consulta/CrudConsultaAgendamento.php">Agendar Consulta</a></li>
                        <li><a><?php
                                if(isset($_SESSION['logado'])){
                                    session_destroy();
                                    header("Location:index.php");
                                }
                                echo " <a href='../index.php'>Sair</a>";
                                ?></a></li>
                    </ul>
                    <!-- end language -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end top-bar -->



    <!-- Inicio Menu -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="../images/logo.png" alt="Image"></a> </div>
            <!-- end navbar-header -->
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="bs-example-navbar-collapse-1">
                <form class="visible-xs">
                    <label>
                        <input type="text" placeholder="Type a word to find">
                    </label>
                    <input type="submit" value="SEARCH">
                </form>
                <!-- end form -->
                <ul class="social-media hidden-sm">
                    <li><a href="https://www.instagram.com/xanddy._/"><i class="ion-social-instagram-outline"></i></a></li>
                    <li><a href="https://twitter.com/xandyszz"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="https://github.com/Xandyssz"><i class="ion-social-github"></i></a></li>
                </ul>
                <!-- end social-media -->

                <ul class="nav navbar-nav">

                    <li><a href="index.php">Home</a></li>

                    <li><a href="#">Exames</a>
                        <ul><!-- menu suspenso dentro do menu original-->
                            <li><a href="AnaliseClinica.php">Análises Clínicas</a></li>
                        </ul>
                        <!-- end dropdown -->
                    </li>

                    <li><a href="noticias.php">Noticias</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="contact-us.php">Contato</a></li>
                </ul>
                <!-- FINAL MENU -->
                <!-- end nav -->
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->
</header>
<!-- end header -->




<!-- FAQ -->
<section class="inner-content">
    <div class="container">
        <h1 class="title-bottom-line">PERGUNTAS <strong>FREQUENTES</strong> </h1>
        <p> Dúvidas são bastante comuns na hora de realizar um exame. Caso você tenha alguma, veja se ela está na lista abaixo.</p>
        <p>Caso a sua questão não seja solucionada por aqui, entre em contato pelo <a href="contact-us.php">Fale Conosco</a></p>
        <br>
        <br>

        <div class="panel-group faq" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading actives">
                    <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">REMÉDIOS INTERFEREM EM EXAMES DE LABORATÓRIO?</a> </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <h3>REMÉDIOS INTERFEREM EM EXAMES DE LABORATÓRIO?</h3>
                        <br>
                        <p>Vários medicamentos podem interferir em exames de laboratório, e, por esse motivo, o uso de medicamentos deve ser informado às recepcionistas do laboratório. A suspensão de qualquer medicamento, antes da coleta de exames, só pode ser feita por seu médico. O laboratório informa, no cadastro dos exames, quando algum exame obriga a suspensão de medicamentos e, quando não for possível suspender a medicação, isto será considerado na interpretação clínica do resultado..</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">ATIVIDADE FÍSICA ATRAPALHA OS EXAMES DED LABORATÓRIO?</a> </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <h3>ATIVIDADE FÍSICA ATRAPALHA OS EXAMES DED LABORATÓRIO?</h3>
                        <br>
                        <p>Atividade física intensa pode interferir em alguns exames, por exemplo, na glicemia. Os exames laboratoriais devem ser colhidos em condições bem definidas, que os médicos chamam de condições basais. Testes feitos após esforços físicos terão, eventualmente, valores diferentes dos realizados em condições normais..</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">BEBIDA ALCÓOLICA PODE ALTERAR RESULTADOS DE EXAMES?</a> </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <h3>BEBIDA ALCÓOLICA PODE ALTERAR RESULTADOS DE EXAMES?</h3>
                        <br>
                        <p>Sim, especialmente o de triglicérides. Uma dose de uísque, uma cerveja ou um copo de vinho na véspera é suficiente para elevar os seus níveis, falseando os resultados. Por isso, o ideal é, antes do exame, ficar três dias sem ingerir qualquer bebida alcoólica..</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">COMO DEVE SER A MINHA ALIMENTAÇÃO NA VÉSPERA DOS EXAMES?</a> </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <h3>COMO DEVE SER A MINHA ALIMENTAÇÃO NA VÉSPERA DOS EXAMES?</h3>
                        <br>
                        <p>Mantenha sua alimentação normalmente, seguindo apenas o tempo de jejum recomendado quando aplicável..</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">POR QUE QUANDO SE TIRA SANGUE PARA EXAME, ÀS VEZES O LOCAL FICA ROXO?</a> </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                        <h3>POR QUE QUANDO SE TIRA SANGUE PARA EXAME, ÀS VEZES O LOCAL FICA ROXO?</h3>
                        <br>
                        <p>Isto chama-se hematoma: extravasamento de sangue para fora da veia. Ele pode ocorrer em determinadas situações, tais como: veias finas, delicadas, com muita pressão; falta de boa compressão no local da punção; e paciente usando algum medicamento que altera a coagulação do sangue, entre os quais a aspirina.</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">PODE-SE FAZER EXAME DE SANGUE COM GRIPE, RESFRIADO OU FEBRE?</a> </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">
                        <h3>PODE-SE FAZER EXAME DE SANGUE COM GRIPE, RESFRIADO OU FEBRE?</h3>
                        <br>
                        <p>Claro. Alguns exames, aliás, são solicitados exatamente porque a pessoa está com febre. A intenção é verificar se alguma infecção é a responsável. Porém, em algumas circunstâncias, a doença responsável pela febre pode interferir nos exames destinados a avaliar aspectos metabólicos e imunológicos. Por cautela, consequentemente, consulte o seu médico ou o laboratório antes de fazer o exame..</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"> BEBER ÁGUA "QUEBRA" O JEJUM? ?</a> </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                    <div class="panel-body">
                        <h3>BEBER ÁGUA "QUEBRA" O JEJUM? </h3>
                        <br>
                        <p>Não. A ingestão de água suficiente para satisfazer a hidratação normal não significa que o jejum tenha sido quebrado.O excesso da ingestão de água interfere em alguns exames de urina. .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- final faq -->





<!-- end logos -->
<section class="footer-bar">
    <div class="container"></div>
</section>
<!-- end footer-bar -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12 col-xs-12"> <img src="../images/logo-white.png" alt="Image" class="pull-left">
                <p class="copyright">Copyright © 2022 , IFSP</p>
            </div>
            <!-- end col-2 -->
            <div class="col-md-4 col-sm-12 col-xs-12">

            </div>
            <!-- end col-4 -->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="AnaliseClinica.php">Análises Clinicas</a></li>
                    <li><a href="faq.php">Faq</a></li>
                    <li><a href="contact-us.php">Contact us</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
            <div class="col-md-2 col-sm-4 col-xs-12">
                <h4>Social Media</h4>
                <ul>
                    <li><a href="https://www.instagram.com/xanddy._/">Instagram</a></li>
                    <li><a href="https://twitter.com/xandyszz">Twitter</a></li>
                    <li><a href="https://github.com/Xandyssz">GitHub</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
<!-- end footer -->

<script type='text/javascript' src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.js"></script>
<script src="../js/wow.js"></script>
<script src="../js/jquery.stellar.js"></script>
<script src="../js/smooth-scroll.js"></script>
<script src="../js/queryloader2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/jquery.fancybox.js"></script>
<script src="../js/jquery.maskedinput.js"></script>
<script src="../js/jquery.ba-cond.min.js" type="text/javascript" ></script>
<script src="../js/jquery.slitslider.js" type="text/javascript" ></script>
<script src="../js/slider-settings.js"></script>
<script src="../js/medicina.js"></script>
</body>
</html>