<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">Edição em Andamento</h6>

                        <div class="buttons pl-0 pl-md-5 mt-2 mt-md-0 d-flex flex-wrap">
                            <a href="javacript:void(3);" class="bg-opacity my-2" onclick="toastNotification('Ops...', 'error', 'Já existe uma edição em andamento')">Nova Edição</a>
                            <a href="#" class="bg-black my-2 color-white">Histórico de Edições</a>
                        </div>
                    </header>

                    <p class="text-danger text-center fw-600">NÃO EXISTEM EDIÇÕES EM ANDAMENTO</p>
                    <!-- comentado -->
                    <!--
                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="table-active text-center">
                                    <th scope="col">Título da Edição</th>
                                    <th scope="col">Ano</th>
                                    <th scope="col">Valor da <br>Inscrição</th>
                                    <th scope="col">Início</th>
                                    <th scope="col">Limite para novos cases</th>
                                    <th scope="col">Data do prêmio</th>
                                    <th scope="col">Encerramento</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Fidinsider 2022</td>
                                    <td>2022</td>
                                    <td>
                                        <a href="javascript:void(3);" data-toggle="modal" data-target="#modalValores">
                                            <i class="bi bi-eye mr-1 fw-600"></i> 
                                            VER TABELA
                                        </a>
                                    </td>
                                    <td>01/01/2022</td>
                                    <td>31/01/2022</td>
                                    <td>21/02/2022</td>
                                    <td>21/02/2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    -->
                    <!-- fim comentado -->
                </section>
                <!-- end card panel -->

                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">Últimos projetos cadastrados na edição atual</h6>

                        <!-- comentado 
                        <div class="buttons pl-0 pl-md-5 mt-2 mt-md-0 d-flex flex-wrap">
                            <a href="#" class="bg-black my-2 color-white">Ver todos os projetos</a>
                        </div>-->
                    </header>

                    <p class="text-danger text-center fw-600">NÃO EXISTEM EDIÇÕES EM ANDAMENTO</p>

                    <!-- comentado -->
                    <!--
                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="table-active text-center">
                                    <th scope="col">Nome do Projeto</th>
                                    <th scope="col">Data do Envio</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Pagamento</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Avaliação</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Projeto 001</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-success">Finalizado</span></td>
                                    <td><span class="text-success">Confirmado</span></td>
                                    <td>R$450,00</td>
                                    <td>100</td>
                                    <td><a href="#"><i class="bi bi-eye mr-1 fw-600"></i> VER DETALHES</a></td>
                                </tr>
                                <tr>
                                    <td>Projeto 002</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-danger">Pendente</span></td>
                                    <td><span class="text-danger">Pendente</span></td>
                                    <td>R$450,00</td>
                                    <td>100</td>
                                    <td><a href="#"><i class="bi bi-eye mr-1 fw-600"></i> VER DETALHES</a></td>
                                </tr>
                                <tr>
                                    <td>Projeto 001</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-success">Finalizado</span></td>
                                    <td><span class="text-success">Confirmado</span></td>
                                    <td>R$450,00</td>
                                    <td>100</td>
                                    <td><a href="#"><i class="bi bi-eye mr-1 fw-600"></i> VER DETALHES</a></td>
                                </tr>
                                <tr>
                                    <td>Projeto 002</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-danger">Pendente</span></td>
                                    <td><span class="text-danger">Pendente</span></td>
                                    <td>R$450,00</td>
                                    <td>100</td>
                                    <td><a href="#"><i class="bi bi-eye mr-1 fw-600"></i> VER DETALHES</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    -->
                    <!-- fim comentado -->
                </section>
                <!-- end card panel -->

                <!-- card panel ferramentas adm -->
                <?php $disabledTools = 'disable'; require('_includes/_toolsAdm.php'); ?>
                <!-- end card panel -->

                <!-- modal valores edição -->
                <?php require('_includes/_modalValores.php'); ?>
                <!-- fim modal valores edição -->
            </div>
        </div>
    </div>
</main>