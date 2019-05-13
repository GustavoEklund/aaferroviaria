<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Basic config -->
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <title><?php echo $title; ?></title>

        <!-- Basic Search Engine configs -->
        <meta name="description" content="Associação Atlética Ferroviária de Pindamonhangaba - SP, clube desportivo que oferece dezenas de modalidades esportivas, além de uma enorme estrutura para a diversão e para o lazer.">
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="clube, ferro, associacao, atletica, socio, pindamonhangaba">
        <meta name="image" content="http://aaferroviaria.000webhostapp.com/img/cardPiscinaLogo.jpg">

        <!-- Schema.org for Google -->
        <meta itemprop="name" content="Associação Atlética Ferroviária - Pindamonhangaba">
        <meta itemprop="description" content="Associação Atlética Ferroviária de Pindamonhangaba - SP, clube desportivo que oferece dezenas de modalidades esportivas, além de uma enorme estrutura para a diversão e para o lazer.">
        <meta itemprop="image" content="http://aaferroviaria.000webhostapp.com/img/cardPiscinaLogo.jpg">

        <!-- Open Graph social media compatibility meta tags -->
        <meta property="og:url" content="http://aaferroviaria.000webhostapp.com">
        <meta property="og:title" content="Associação Atlética Ferroviária - Pindamonhangaba">
        <meta property="og:description" content="Associação Atlética Ferroviária de Pindamonhangaba - SP, clube desportivo que oferece dezenas de modalidades esportivas, além de uma enorme estrutura para a diversão e para o lazer.">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="pt-br">
        <meta property="og:image:secure_url" content="http://aaferroviaria.000webhostapp.com/img/cardPiscinaLogo.jpg">
        <meta property="og:image" content="http://aaferroviaria.000webhostapp.com/img/cardPiscinaLogo.jpg">
        <meta name="fb:admins" content="533647533400302">

        <!-- Twitter social media compatibility meta tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:description" content="Associação Atlética Ferroviária de Pindamonhangaba - SP, clube desportivo que oferece dezenas de modalidades esportivas, além de uma enorme estrutura para a diversão e para o lazer.">
        <meta name="twitter:title" content="Associação Atlética Ferroviária - Pindamonhangaba">
        <meta name="twitter:site" content="@AAFerroviaria">
        <meta name="twitter:image" content="http://aaferroviaria.000webhostapp.com/img/cardPiscinaLogo.jpg">
        <meta name="twitter:creator" content="@AAFerroviaria">

        <!-- Mobile App Meta Tags -->
        <meta name="theme-color" content="#cfdf43">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="manifest" href="manifest.json">

        <!-- Site icons -->
        <link rel="apple-touch-icon-precomposed" sizes="180x180" href="img/aaferroviariaIcon_x180.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/aaferroviariaIcon_x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/aaferroviariaIcon_x16.png">
        <link rel="shortcut icon" href="img/aaferroviariaIcon_x32.png">

        <!-- Stylesheet import -->
        <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
        <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">-->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu-dropdown.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/hero-diagonal.css">
        <link rel="stylesheet" href="node_modules/photoswipe/dist/photoswipe.css">
        <link rel="stylesheet" href="node_modules/photoswipe/dist/default-skin/default-skin.css">

        <!-- Scripts -->
        <script>document.getElementsByTagName("html")[0].className += " js";</script> <!-- Back to top button initializer -->
    </head>
    <body>
        <!-- Start Header -->
        <header class="cd-morph-dropdown d-flex">
            <a href="#" class="nav-trigger">Open Nav<span aria-hidden="true"></span></a>
            <a href="inicio">
                <img src="img/logoFerroGestao10.png"  style="display: block; margin: 5px 0" alt="Logo Ferroviária">
            </a>
            <!-- Start Nav Bar -->
            <nav class="main-nav">
                <ul>
                    <li>
                        <a href="inicio" title="Voltar à página inicial [alt + i]" accesskey="i">Início</a>
                    </li>
                    <li class="has-dropdown links" data-content="theClub">
                        <a href="#">O Clube <i class="fas fa-caret-down"></i></a>
                    </li>
                    <li class="has-dropdown button" data-content="news">
                        <a href="noticias" title="Ver todas as notícias [alt + n]" accesskey="n">Notícias <i class="fas fa-caret-down"></i></a>
                    </li>
                    <li class="has-dropdown button" data-content="diary">
                        <a href="agenda" title="Ver a programação de eventos [alt + a]" accesskey="a">Agenda  <i class="fas fa-caret-down"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#schedule" title="Ver horários das atividades [alt + h]" accesskey="h">Horários</a>
                    </li>
                    <li class="has-dropdown button" data-content="about">
                        <a href="#">Sobre  <i class="fas fa-caret-down"></i></a>
                    </li>
                    <li class="has-dropdown button" data-content="contact">
                        <a href="contato" title="Entre em contato [alt + c]" accesskey="c">Fale Conosco  <i class="fas fa-caret-down"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- End Nav Bar -->
            <!-- Start Nav Dropdown -->
            <div class="morph-dropdown-wrapper">
                <!-- Start Dropdown Content -->
                <div class="dropdown-list">
                    <ul>
                        <!-- Start Home Dropdown -->
                        <li id="home" class="dropdown home">
                            <a href="inicio" class="label font-weight-bold text-uppercase">Início</a>
                            <nav class="content">
                                <ul class="list-group">
                                    <li>
                                        <a href="inicio">
                                            <h4 class="lead text-dark font-weight-bold">Página inicial</h4>
                                            <p>Voltar ao início</p>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </li>
                        <!-- End Home Dropdown -->
                        <!-- Start The Club Dropdown -->
                        <li id="theClub" class="dropdown the-club">
                            <a href="#" class="label font-weight-bold text-uppercase">O Clube</a>
                            <nav class="content">
                                <ul class="list-group">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#localizacao">
                                            <h4 class="lead text-dark font-weight-bold">Localização</h4>
                                            <p>Prédios do clube em pinda</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="infraestrutura">
                                            <h4 class="lead text-dark font-weight-bold">Infraestrutura</h4>
                                            <p>Edificação e equipamentos</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="modalidades">
                                            <h4 class="lead text-dark font-weight-bold">Modalidades</h4>
                                            <p>Esportes e atividades</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4 class="lead text-dark font-weight-bold">Fotos</h4>
                                            <p>Ambiente do clube</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="files/convenio-saude-atualizado-11.04.18.pdf">
                                            <h4 class="lead text-dark font-weight-bold">Convênios</h4>
                                            <p>Descontos em clínicas</p>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </li>
                        <!-- End The Club Dropdown -->
                        <!-- Start Schedule Dropdown -->
                        <li id="schedules" class="dropdown schedule">
                            <a href="inicio" class="label font-weight-bold text-uppercase">Horários</a>
                            <nav class="content">
                                <ul class="list-group">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#schedule">
                                            <h4 class="lead text-dark font-weight-bold">Horários</h4>
                                            <p>Agenda de atividades</p>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </li>
                        <!-- End Schedule Dropdown -->
                        <!-- Start News Dropdown -->
                        <li id="news" class="dropdown links">
                            <a href="#" class="label font-weight-bold text-uppercase">Notícias</a>
                            <nav class="content p-0">
                                <ul class="px-0">
                                    <!-- Start News 01 -->
                                    <li class="w-100">
                                        <a href="noticia?n=1" class="text-decoration-none" title="Seja associado do Clube que mais cresce na Região!">
                                            <div class="card px-0 border-0 border-radius-0 shadow">
                                                <div class="row">
                                                    <div class="col-4 pr-0">
                                                        <img class="card-img-horizontal" src="uploads/menuNoticia1.jpg" alt="Noticia Promoção">
                                                    </div>
                                                    <div class="col-8 px-0">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-uppercase font-weight-bold text-dark">Promoção imperdível</h5>
                                                            <p class="card-text">Seja associado do Clube que mais cresce na Região!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- End News 01 -->
                                    <!-- Start News 02 -->
                                    <li class="w-100">
                                        <a href="noticia?n=2" class="text-decoration-none" title="Futsal Sub 20 masculino Semelp-Ferroviária estreia dia 25 no Campeonato Paulista">
                                            <div class="card px-0 border-0 border-radius-0 shadow">
                                                <div class="row">
                                                    <div class="col-4 pr-0">
                                                        <img class="card-img-horizontal" src="uploads/menuNoticia2.jpg" alt="Noticia Futsal">
                                                    </div>
                                                    <div class="col-8 px-0">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-uppercase font-weight-bold text-dark">Futsal</h5>
                                                            <p class="card-text">Sub 20 masculino Semelp-Ferroviária estreia dia 25...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- End News 02 -->
                                    <!-- Start News 03 -->
                                    <li class="w-100">
                                        <a href="noticia?n=3" class="text-decoration-none" title="Academia da Ferroviária lança Mix 59 de Power Jump quinta-feira dia 26">
                                            <div class="card px-0 border-0 border-radius-0 shadow">
                                                <div class="row">
                                                    <div class="col-4 pr-0">
                                                        <img class="card-img-horizontal" src="uploads/menuNoticia3.jpg" alt="Noticia Academia">
                                                    </div>
                                                    <div class="col-8 px-0">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-uppercase font-weight-bold text-dark">Academia</h5>
                                                            <p class="card-text">Ferroviária lança Mix 59 de Power Jump quinta-feira...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- End News 03 -->
                                    <!-- Start Link More News -->
                                    <li class="w-100">
                                        <a href="noticias" class="btn btn-success border-radius-0 py-3 ml-0 text-uppercase font-weight-bold">
                                            Ver mais notícias <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                    <!-- End Link More News -->
                                </ul>
                            </nav>
                        </li>
                        <!-- End News Dropdown -->
                        <!-- Start Diary Dropdown -->
                        <li id="diary" class="dropdown button">
                            <a href="#" class="label font-weight-bold text-uppercase">Agenda</a>
                            <nav class="content p-0">
                                <ul class="px-0">
                                    <!-- Start Event 01 -->
                                    <li class="w-100">
                                        <a href="#" class="text-decoration-none"  data-toggle="modal" data-target="#evento1" title="Feriado no Clube">
                                            <div class="card px-0 border-0 border-radius-0 shadow">
                                                <div class="row">
                                                    <div class="col-4 pr-0">
                                                        <img class="card-img-horizontal" src="img/menuEvento1.jpg" alt="Evento">
                                                    </div>
                                                    <div class="col-8 px-0">
                                                        <div class="card-body py-2">
                                                            <h5 class="card-title text-uppercase font-weight-bold text-dark mb-0">Feriado no Clube</h5>
                                                            <p class="card-text mb-0">Comemorando o 1º aniversário do novo playground</p>
                                                            <small class="text-muted">01 de maio</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- End Event 01 -->
                                    <!-- Start Event 02 -->
                                    <li class="w-100">
                                        <a href="#" class="text-decoration-none"  data-toggle="modal" data-target="#evento2" title="Paulo Meyer & The Thunderheads">
                                            <div class="card px-0 border-0 border-radius-0 shadow">
                                                <div class="row">
                                                    <div class="col-4 pr-0">
                                                        <img class="card-img-horizontal" src="img/menuEvento2.jpg" alt="Evento">
                                                    </div>
                                                    <div class="col-8 px-0">
                                                        <div class="card-body py-2">
                                                            <h5 class="card-title text-uppercase font-weight-bold text-dark mb-0">Paulo Meyer & The Thunderheads</h5>
                                                            <br>
                                                            <small class="text-muted">04 de maio</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- End Event 02 -->
                                    <!-- Start Event 03 -->
                                    <li class="w-100">
                                        <a href="#" class="text-decoration-none"  data-toggle="modal" data-target="#evento3" title="Feira de artesanato">
                                            <div class="card px-0 border-0 border-radius-0 shadow">
                                                <div class="row">
                                                    <div class="col-4 pr-0">
                                                        <img class="card-img-horizontal" src="img/menuEvento3.jpg" alt="Evento">
                                                    </div>
                                                    <div class="col-8 px-0">
                                                        <div class="card-body py-2">
                                                            <h5 class="card-title text-uppercase font-weight-bold text-dark mb-0">Feira de artesanato</h5>
                                                            <p class="card-text mb-0">32º feira da gente - dia das mães</p>
                                                            <br>
                                                            <small class="text-muted">05 de maio</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- End Event 03 -->
                                    <!-- Start Link Programming -->
                                    <li class="w-100">
                                        <a href="agenda" class="btn btn-success border-radius-0 py-3 ml-0 text-uppercase font-weight-bold">
                                            Ver programação completa <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                    <!-- End Link Programming -->
                                </ul>
                            </nav>
                        </li>
                        <!-- End Diary Dropdown -->
                        <!-- Start About Dropdown -->
                        <li id="about" class="dropdown about">
                            <a href="#" class="label font-weight-bold text-uppercase">Sobre</a>
                            <div class="content">
                                <ul class="list-group">
                                    <li>
                                        <a href="historico#">
                                            <h4 class="lead text-dark font-weight-bold">Histórico</h4>
                                            <p>Sobre a A.A.Ferroviária</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="historico#presidentes">
                                            <h4 class="lead text-dark font-weight-bold">Ex-Presidentes</h4>
                                            <p>Galeria dos Presidentes</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4 class="lead text-dark font-weight-bold">Diretores</h4>
                                            <p>Atual diretoria do clube</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4 class="lead text-dark font-weight-bold">Conselheiros</h4>
                                            <p>Atuais conselheiros do clube</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="estatuto">
                                            <h4 class="lead text-dark font-weight-bold">Estatuto</h4>
                                            <p>Termos, direitos e deveres</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End About Dropdown -->
                        <!-- Start Contact Dropdown -->
                        <li id="contact" class="dropdown contact">
                            <a href="contato" class="label font-weight-bold text-uppercase">Fale Conosco</a>
                            <div class="content">
                                <ul class="list-group">
                                    <li>
                                        <a href="contato#">
                                            <h4 class="lead text-dark font-weight-bold">Contatos</h4>
                                            <p>Telefones, e-mails, mensagem...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contato#ouvidoria">
                                            <h4 class="lead text-dark font-weight-bold">Ouvidoria</h4>
                                            <p>Sugestão, elogio, reclamação...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4 class="lead text-dark font-weight-bold">Associe-se</h4>
                                            <p>Saiba como ser sócio</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Contact Dropdown -->
                    </ul>
                    <div class="bg-layer" aria-hidden="true"></div>
                </div>
                <!-- End Dropdown Content -->
            </div>
            <!-- End Nav Dropdown -->
        </header>
        <!-- End Header -->