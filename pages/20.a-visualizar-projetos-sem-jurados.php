<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">Definir jurados</h6>
                    </header>

                    <!-- alert important -->
                    <?php require('_includes/_alertImportant.php'); ?>
                    <!-- end alert important -->

                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="table-active text-center">
                                    <th scope="col">Nome do Projeto</th>
                                    <th scope="col">Qtd. Jurados(as)</th>
                                    <th scope="col">Jurados(as)</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php for($i=0;$i<5;$i++) : ?>
                                <tr>
                                    <td>Projeto 001</td>
                                    <td>4</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#modalJuradosLista">
                                            <i class="bi bi-eye mr-1 fw-600"></i>
                                            VER LISTA
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="bi bi-person-bounding-box mr-1"></i>
                                            GERENCIAR JURADOS
                                        </a>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- end card panel -->

                <!-- pagination model -->
                <?php require('_includes/_pagination.php'); ?>
                <!-- end pagination model -->

                 <!-- modal jurados -->
                 <?php require('_includes/_modalJuradosLista.php'); ?>
                <!-- modal jurados -->
            </div>
        </div>
    </div>
</main>