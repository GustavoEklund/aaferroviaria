<?php
$title = 'Contato - Associação Atlética Ferroviária - Pindamonhangaba';
include_once 'classes/head.inc.php';
?>
    <!-- Start Title -->
    <section class="row w-100 mt-10">
        <div class="container-fluid ml-5">
            <h1 class="font-weight-bold text-uppercase"><i class="fas fa-phone"></i> Contato</h1>
        </div>
    </section>
    <!-- End Title -->
    <!-- Start Main Content -->
    <main class="container-fluid mt-4 d-flex">
        <!-- Start Content -->
        <section class="col-md-8 col-sm-12">
            <div class="card mb-3 px-0 border-0 shadow">
                <div class="card-body">
                    <h3 class="card-title text-uppercase font-weight-bold border-bottom-green-15">Contatos:</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Secretaria:</b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)2126–4444 / (12)2126–4439<br>
                                    <i class="fab fa-whatsapp"></i> (12)98224-1116<br>
                                    <i class="far fa-envelope"></i> contato@aaferroviaria.com.br
                                </small>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Depto. Pessoal / RH:</b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)2126–4431<br>
                                    <i class="far fa-envelope"></i> rh@aaferroviaria.com.br
                                </small>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Tesouraria:</b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)2126-4437
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Gerência:</b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)2126–4429<br>
                                    <i class="far fa-envelope"></i> contato@aaferroviaria.com.br
                                </small>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Depto. de Compras:</b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)2126–4431<br>
                                    <i class="far fa-envelope"></i> compras@aaferroviaria.com.br
                                </small>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Portaria: </b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)2126–4428
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Academia:</b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)2126–4426
                                </small>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Campo de Futebol:</b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)3645-4968
                                </small>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Depto. de Informática / T.I.:</b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)2126–4423 <br>
                                    <i class="far fa-envelope"></i> informatica@aaferroviaria.com.br
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="row" id="ouvidoria">
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Depto. de Manutenção:</b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)2126–4435
                                </small>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Lanchonete:</b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)2126–4424
                                </small>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12 my-2">
                            <p class="card-text">
                                <b>Estacionamento:</b><br>
                                <small class="text-muted">
                                    <i class="fas fa-phone"></i> (12)2126–4420
                                </small>
                            </p>
                        </div>
                    </div>
                    <hr class="my-5">
                    <form class="mt-5">
                        <h3 class="card-title text-uppercase font-weight-bold mb-4 border-bottom-green-20">Ouvidoria / mensagem:</h3>
                        <div class="form-row">
                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                <input type="radio" class="custom-control-input" id="is-associated" name="associated">
                                <label class="custom-control-label" for="is-associated">Já sou associado</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                <input type="radio" class="custom-control-input" id="isnt-associated" name="associated">
                                <label class="custom-control-label" for="isnt-associated">Não sou associado</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="name">* Nome completo</label>
                                <input type="text" class="form-control" id="name" placeholder="Nome completo" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email">E-Mail</label>
                                <input type="email" class="form-control" id="email" placeholder="E-Mail">
                                <small class="form-text text-muted">Usaremos este e-mail para entrar em contato com você.</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="numero">Telefone/celular</label>
                                <input type="tel" class="form-control" id="numero" name="numero" placeholder="Telefone/celular">
                                <small class="form-text text-muted">Usaremos este número para entrar em contato com você.</small>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="cep">* CEP:</label>
                                <input type="email" class="form-control" id="cep" name="cep" placeholder="CEP" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="associated-number" id="associated-number-text">Nº de Associado</label>
                                <input type="number" class="form-control" id="associated-number" placeholder="Nº de Associado" disabled>
                            </div>
                        </div>
                        <p class="form-text">Motivo do contato:</p>
                        <div class="form-row mb-3">
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="complaint">
                                <label class="custom-control-label" for="complaint">Reclamação</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="suggestion">
                                <label class="custom-control-label" for="suggestion">Sugestão</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="compliment">
                                <label class="custom-control-label" for="compliment">Elogio</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="doubt">
                                <label class="custom-control-label" for="doubt">Dúvida</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="other">
                                <label class="custom-control-label" for="other">Outro</label>
                            </div>
                        </div>
                        <p class="form-text">Esta é a primeira vez que você entra em contato?</p>
                        <div class="form-row mb-3">
                            <div class="custom-control custom-control-inline custom-radio">
                                <input type="radio" class="custom-control-input" id="yes">
                                <label class="custom-control-label" for="yes">Sim</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio">
                                <input type="radio" class="custom-control-input" id="no">
                                <label class="custom-control-label" for="no">Não</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="message" rows="3" maxlength="500" autocomplete="on" spellcheck="true" placeholder="Mensagem (Max. 500 caracteres)"></textarea>
                        </div>
                        <div class="form-row">
                            <input type="submit" class="btn btn-success" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End News -->
        <aside class="col d-none d-md-block">
            <div class="card px-0 border-0 shadow">
                <section class="card-body">
                    <img src="img/logoFerroGestao10Large.png" class="card-img-top">
                    <p class="card-text mt-4">A busca da satisfação dos associados é a nossa maior tarefa.</p>
                    <p class="card-text">Temos uma equipe de profissionais, nos diversos setores de atendimento.</p>
                    <p class="card-text">A qualidade desse atendimento é nossa grande preocupação. Todos são orientados ao melhor procedimento.</p>
                    <p class="card-text">A partir de agora, além de melhor atendimento, queremos ter a certeza de sua satisfação, para isso, criamos o serviço de Ouvidoria.</p>
                    <p class="card-text">A política adotada é a de acelerarmos o retorno à sua manifestação, sempre que possível com a resposta final para cada assunto.</p>
                    <p class="card-text"> Logicamente, alguns casos demandarão mais tempo do que o ideal. Para isso, solicitamos que informe corretamente os dados, ao preencher o formulário, para podermos lhe dar o acompanhamento adequado de sua manifestação.</p>
                    <p class="card-text">Obrigatoriamente as mensagens deverão conter a identificação do emitente.</p>
                    <p class="card-text">Não serão consideradas as manifestações anônimas ou com informações erradas, tais como número de associado ou email incompleto.</p>
                    <p class="card-text">Importante: somente o serviço de Ouvidoria terá acesso a essas informações as quais, após triadas, serão levadas ao conhecimento da Presidência, para ciência e definição de procedimentos.</p>
                    <p class="card-text">Contamos com sua colaboração para o sucesso da nossa Ferroviária.</p>
                </section>
            </div>
        </aside>
        </aside>
    </main>
    <!-- End Main Content -->
    <?php include_once 'classes/lastNews.inc.php'; ?>

<?php include_once 'classes/footer.inc.php'; ?>
<script>
    $('#is-associated').click(function () {
        $('#associated-number-text').html('* Nº de Associado');
        $('#associated-number').prop('disabled', false);
        $('#associated-number').prop('required', true);
    });

    $('#isnt-associated').click(function () {
        $('#associated-number-text').html('Nº de Associado');
        $('#associated-number').prop('disabled', true);
        $('#associated-number').prop('required', false);
    });
</script>
<!--<script src="https://www.google.com/recaptcha/api.js?render=6Lfh4aEUAAAAAKQcocScshFncRMl9sJXmFdXa-Ew"></script>-->