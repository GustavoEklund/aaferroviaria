<?php
    $title = 'Agenda - Associação Atlética Ferroviária - Pindamonhangaba';
    include_once 'classes/head.inc.php';
?>
        <!-- Start Title -->
        <section class="row w-100 mt-5">
            <div class="container-fluid ml-5">
                <h1 class="font-weight-bold text-uppercase"><i class="far fa-calendar-alt"></i> Programação</h1>
            </div>
        </section>
        <!-- End Title -->
        <!-- Start Main Content -->
        <main class="container-fluid mt-4 d-flex">
            <!-- Start News -->
            <section class="col-md-8 col-sm-12">
                <div class="card mb-3 px-0 border-0 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/modalEvento1.jpg" alt="Evento 1" data-toggle="modal" data-target="#evento1" style="width: 100%; cursor: pointer;">
                            </div>
                            <div class="col-md-8">
                                <h2 class="card-text text-uppercase font-weight-bold mt-4">01 de maio - Feriado no clube</h2>
                                <p class="card-text">No dia 1º de maio, quarta-feira, feriado nacional (Dia do Trabalho), a Gestão 10 realizará diversos eventos na Ferroviária, confira:</p>
                                <ul style="list-style: none;">
                                    <li><b>Programação:</b></li>
                                    <li>10:00h - Futebol Baixada vs Society</li>
                                    <li>12:00h - Almoço no clube - espetinho de churrasco com som ao vivo</li>
                                    <li>11:00h às 15:00h -  Recreação infantil com monitores Kids. Comemoração do 1ºaniversário de inauguração do novo Play-Ground. Estão funcionando lanchonete, saunas e piscinas.</li>
                                </ul>
                                <p class="card-text">Todos os associados estão convidados para passarem o feriado no clube com familiares e amigos.</p>
                                <p class="card-text">
                                    <b>CAMPEONATO METROPOLITANO DE FUTSAL</b><br>
                                    Haverá também jogos de Futsal pelo Campeonato Metropolitano entre Semelp/Pinda x São Paulo FC (da capital – série Ouro) a partir das 13h no Ginásio de Esportes Tobias Salgado, nas categorias Sub 18, Sub 16, Sub 14 e Sub 12.
                                </p>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/modalEvento2.jpg" alt="Evento 2" data-toggle="modal" data-target="#evento2" style="width: 100%; cursor: pointer;">
                            </div>
                            <div class="col-md-8">
                                <h3 class="card-text text-uppercase font-weight-bold mt-4">04 de maio - Paulo Meyer & The Thunderheads</h3>
                                <p class="card-text"><b>20:00h</b> - Show ao vivo com participação especial de Edu Souza</p>
                                <p class="card-text">
                                    Ingressos à venda: Ferroviária de pinda<br>
                                    R. Álvaro Pinto Madureira, 81 - Tel. (12) 2126-4444
                                </p>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/modalEvento3.jpg" alt="Evento 3" data-toggle="modal" data-target="#evento3" style="width: 100%; cursor: pointer;">
                            </div>
                            <div class="col-md-8">
                                <h3 class="card-text text-uppercase font-weight-bold mt-4">Feira de artesanato</h3>
                                <p class="card-text"><b>09:00h às 18:00h</b> - 32ª arte da gente - dia das mães</p>
                                <p class="card-text">
                                    Local: Ferroviária de pinda<br>
                                    R. Álvaro Pinto Madureira, 81 - Tel. (12) 2126-4444
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End News -->
            <?php include_once 'classes/trending.inc.php'; ?>
        </main>
        <!-- End Main Content -->
<?php
    include_once 'classes/lastNews.inc.php';
    include_once 'classes/footer.inc.php';