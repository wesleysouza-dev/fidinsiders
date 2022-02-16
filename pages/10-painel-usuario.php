<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap mb-0">
                        <h6 class="my-2 pr-3 pr-md-5">Painel de Controle</h6>

                        <div class="buttons pl-0 pl-md-5 mt-2 mt-md-0 d-flex flex-wrap">
                            <a href="#" class="bg-black my-2 color-white">Enviar Novo Projeto</a>
                        </div>
                    </header>
                    <p class="mb-5">Abaixo você pode acessar as principais informações sobre a sua conta e verificar seus projetos enviados:</p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="table-active text-center">
                                    <th scope="col">Nome do Projeto</th>
                                    <th scope="col">Data do Envio</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Pagamento</th>
                                    <th scope="col">Valor</th>
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
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-link mr-1">Detalhes</a>
                                            <a href="#" class="color-999 ml-1">Finalizar Envio</a>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Projeto 002</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-danger">Pendente</span></td>
                                    <td><span class="text-danger">Pendente</span></td>
                                    <td>R$450,00</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-999 mr-1">Detalhes</a>
                                            <a href="#" class="color-link ml-1">Finalizar Envio</a>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>

                  
                </section>
                <!-- end card panel -->

                <!-- card panel ferramentas adm -->
                <?php require('_includes/_toolsUser.php'); ?>
                <!-- end card panel -->

                <!-- modal valores edição -->
                <?php require('_includes/_modalValores.php'); ?>
                <!-- fim modal valores edição -->
            </div>
        </div>
    </div>
</main>