<?php
/**
 * @package Exemplo MVC com PHP
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'lib/Application.php';
date_default_timezone_set("Brazil/East");
$o_Application = new Application();
$o_Application->dispatch();
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Site Properties -->
        <title>Homepage - Semantic</title>
        <link rel="stylesheet" type="text/css" href="template/css/semantic.min.css">

        <style type="text/css">

            .hidden.menu {
                display: none;
            }


            .masthead .logo.item img {
                margin-right: 1em;
            }
            .masthead .ui.menu .ui.button {
                margin-left: 0.5em;
            }
            .masthead h1.ui.header {
                margin-top: 3em;
                margin-bottom: 0em;
                font-size: 4em;
                font-weight: normal;
            }
            .masthead h2 {
                font-size: 1.7em;
                font-weight: normal;
            }

            .ui.vertical.stripe {
                padding: 8em 0em;
            }
            .ui.vertical.stripe h3 {
                font-size: 2em;
            }
            .ui.vertical.stripe .button + h3,
            .ui.vertical.stripe p + h3 {
                margin-top: 3em;
            }
            .ui.vertical.stripe .floated.image {
                clear: both;
            }
            .ui.vertical.stripe p {
                font-size: 1.33em;
            }
            .ui.vertical.stripe .horizontal.divider {
                margin: 3em 0em;
            }

            .quote.stripe.segment {
                padding: 0em;
            }
            .quote.stripe.segment .grid .column {
                padding-top: 5em;
                padding-bottom: 5em;
            }

            .footer.segment {
                padding: 5em 0em;
            }

            .secondary.pointing.menu .toc.item {
                display: none;
            }

            @media only screen and (max-width: 700px) {
                .ui.fixed.menu {
                    display: none !important;
                }
                .secondary.pointing.menu .item,
                .secondary.pointing.menu .menu {
                    display: none;
                }
                .secondary.pointing.menu .toc.item {
                    display: block;
                }
                .masthead.segment {
                    min-height: 350px;
                }
                .masthead h1.ui.header {
                    font-size: 2em;
                    margin-top: 1.5em;
                }
                .masthead h2 {
                    margin-top: 0.5em;
                    font-size: 1.5em;
                }
            }


        </style>

        <script src="template/js/jquery-2.1.3.min.js"></script>
        <script src="template/js/semantic.min.js"></script>
        <script>
            $(document)
                    .ready(function () {
                        // create sidebar and attach to menu open
                        $('.ui.sidebar')
                                .sidebar('attach events', '.toc.item')
                                ;

                    })
                    ;
        </script>
    </head>
    <body>


        <!-- Sidebar Menu -->
        <div class="ui vertical inverted sidebar menu">
            <a class="active item">Início</a>
            <a class="item">UFPA</a>
            <a class="item">CTIC</a>
            <a class="item">PDTI</a>
            <a class="item">SISP</a>
        </div>


        <!-- Page Contents -->
        <div class="pusher">
            <div class="ui inverted vertical masthead center aligned segment">

                <div class="ui container">
                    <div class="ui large secondary inverted pointing menu">
                        <a class="toc item">
                            <i class="sidebar icon"></i>
                        </a>
                        <a class="active item">Início</a>
                        <a class="item">UFPA</a>
                        <a class="item">CTIC</a>
                        <a class="item">PDTI</a>
                        <a class="item">SISP</a>
                        <div class="right item">
                            <a class="ui inverted button" href="index.php?controle=usuario&acao=login">Acessar</a>
                        </div>
                    </div>
                </div>

                <div class="ui text container">
                    <img src="template/imagens/header_img.jpg" />
                </div>

            </div>


            <div class="ui vertical stripe quote segment">
                <div class="ui equal width stackable internally celled grid">
                    <div class="center aligned row">
                        <div class="column">
                            <h3>Plano Diretor de Tecnologia da Informação (PDTI)</h3>
                            <p>
                                É o instrumento que permite nortear e acompanhar a atuação da área de TI, definindo estratégias e o plano de ação para implantá-las. 
                            </p>
                        </div>
                        <div class="column">
                            <h3>UFPA PDTI 1.0 </h3>
                            <p>Sistema de Controle de PDTI</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="ui inverted vertical footer segment">
                <div class="ui container">
                    <div class="ui stackable inverted divided equal height stackable grid">
                        <div class="three wide column">
                            <h4 class="ui inverted header">Sobre</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Mapa do Sistema</a>
                                <a href="#" class="item">Contato</a>
                            </div>
                        </div>
                        <div class="three wide column">
                            <h4 class="ui inverted header">Legislação Pertinente</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Decreto UFPA</a>
                                <a href="#" class="item">Normativo SISP</a>
                                <a href="#" class="item">Recomendação TCU</a>
                            </div>
                        </div>
                        <div class="ten wide column">
                            <h4 class="ui inverted header">Metas e Indicadores definidos</h4>
                            <p> Devem ser objeto de acompanhamento sistemático e avaliação anual, exigindo um papel estratégico e visão sistêmica dos gestores corporativos e, principalmente, dos responsáveis pela gestão de TI da UFPA.</p> <p> O acompanhamento deve ser apoiado em <strong>software</strong> de forma que seja possível gerenciar as medidas, as metas e seus desdobramentos, os indicadores e as anomalias através de relatórios, de gráficos e de um painel de controle onde a alta administração tem uma visão dos indicadores e da instituição.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
