<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">projetos cadastrados na edição atual</h6>

                        <div class="buttons pl-0 pl-md-5 mt-2 mt-md-0 d-flex flex-wrap">
                            <a href="#" class="bg-black my-2 color-white">
                                <i class="bi bi-person-bounding-box mr-2"></i>
                                Definir jurados
                            </a>
                        </div>
                    </header>

                    <!-- FILTRO STATUS -->
                    <?php require('_includes/_filtersProjects.php'); ?>
                    <!-- FIM FILTRO STATUS -->

                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="table-active text-center">
                                    <th scope="col">Nome do Projeto</th>
                                    <th scope="col">Data do Envio</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Avaliação</th>
                                    <th scope="col">Jurados</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Projeto 001</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-danger">Pendente</span></td>
                                    <td>R$450,00</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-999 mr-1">-</a>
                                            <a href="#" class="color-link ml-1">Ver notas</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-999 mr-1">Ver jurados</a>
                                            <a href="#" class="color-999 ml-1">Alterar</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="bi bi-eye mr-1 fw-600"></i>
                                            VER DETALHES
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Projeto 001</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-danger">Pgt. Pendente</span></td>
                                    <td>R$427,50</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-999 mr-1">-</a>
                                            <a href="#" class="color-link ml-1">Ver notas</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-999 mr-1">Ver jurados</a>
                                            <a href="#" class="color-999 ml-1">Alterar</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="bi bi-eye mr-1 fw-600"></i>
                                            VER DETALHES
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Projeto 003</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-warning">A definir jurado</span></td>
                                    <td>R$427,50</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-999 mr-1">-</a>
                                            <a href="#" class="color-link ml-1">Ver notas</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-999 mr-1">Ver jurados</a>
                                            <a href="#" class="color-999 ml-1">Alterar</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="bi bi-eye mr-1 fw-600"></i>
                                            VER DETALHES
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Projeto 004</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-info">Avaliação Pendente</span></td>
                                    <td>R$427,50</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-999 mr-1">-</a>
                                            <a href="#" class="color-link ml-1">Ver notas</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-link mr-1">Ver jurados</a>
                                            <a href="#" class="color-link ml-1">Alterar</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="bi bi-eye mr-1 fw-600"></i>
                                            VER DETALHES
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Projeto 005</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-success">Finalizado</span></td>
                                    <td>R$427,50</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-999 mr-1">-</a>
                                            <a href="#" class="color-link ml-1">Ver notas</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-link mr-1">Ver jurados</a>
                                            <a href="#" class="color-link ml-1">Alterar</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="bi bi-eye mr-1 fw-600"></i>
                                            VER DETALHES
                                        </a>
                                    </td>
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