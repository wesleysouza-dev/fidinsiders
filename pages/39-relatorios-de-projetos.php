<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">Relatórios de Projeto</h6>

                        <div class="buttons pl-0 pl-md-5 mt-2 mt-md-0 d-flex flex-wrap align-items-center">
                            <span class="text-uppercase fw-500 fs-14 border-1-black px-2 py-2 d-block">Volume Total de Pagamento na Edição:</span>
                            <a href="javascript:void(3);" class="bg-black color-white py-2">
                               R$999.999,00
                            </a>
                        </div>
                    </header>

                    <!-- FILTRO STATUS -->
                    <?php require('_includes/_filtersReports.php'); ?>
                    <!-- FIM FILTRO STATUS -->

                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="table-active text-center">
                                    <th scope="col">Nome do Projeto</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Status <br>Pagamento</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Avaliação</th>
                                    <th scope="col">Categoria</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Projeto 001</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-success">Confirmado</span></td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <span class="mr-1">R$450,00</span>
                                            <a href="#" class="color-link ml-1">Dados para NF</a>
                                        </div>
                                    </td>
                                    <td>100</td>
                                    <td>Nome da Categoria</td>
                                </tr>

                                <tr>
                                    <td>Projeto 002</td>
                                    <td>05/01/2022</td>
                                    <td><span class="text-danger">Pendente</span></td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <span class="mr-1">R$450,00</span>
                                            <a href="javascript:void(3);" class="color-999 ml-1">Dados para NF</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>Nome da Categoria</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- end card panel -->

                <!-- pagination model -->
                <?php require('_includes/_pagination.php'); ?>
                <!-- end pagination model -->
            </div>
        </div>
    </div>
</main>