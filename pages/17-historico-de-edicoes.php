<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">Histórico de Edições</h6>
                    </header>

                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="table-active text-center">
                                    <th scope="col">Título da Edição</th>
                                    <th scope="col">Ano</th>
                                    <th scope="col">Valor da <br>Inscrição</th>
                                    <th scope="col">Início</th>
                                    <th scope="col">Encerramento</th>
                                    <th scope="col">Projetos</th>
                                    <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php for($i=0;$i<=10;$i++) : ?>
                                <tr>
                                    <td>Fidinsider 2022</td>
                                    <td>2022</td>
                                    <td>
                                        <a href="javascript:void(3);" data-toggle="modal" data-target="#modalValores">
                                            <i class="bi bi-eye mr-1 fw-600"></i> 
                                            Ver Tabela
                                        </a>
                                    </td>
                                    <td>01/01/2022</td>
                                    <td>31/01/2022</td>
                                    <td>
                                        <a href="javascript:void(3);">
                                            <i class="bi bi-eye mr-1 fw-600"></i> 
                                            Ver Lista
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(3);">
                                            <i class="bi bi-eye mr-1 fw-600"></i> 
                                            Ver Detalhes
                                        </a>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- end card panel -->
            </div>
        </div>

        <!-- modal valores edição -->
        <?php require('_includes/_modalValores.php'); ?>
        <!-- fim modal valores edição -->
    </div>
</main>