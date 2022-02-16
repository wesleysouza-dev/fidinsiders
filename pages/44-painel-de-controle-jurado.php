<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">Projetos para Avaliar</h6>

                        <div class="buttons pl-0 pl-md-5 mt-2 mt-md-0 d-flex flex-wrap">
                            <a href="#" class="bg-black my-2 color-white">Editar projetos avaliados</a>
                        </div>
                    </header>

                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="table-active text-center">
                                    <th scope="col">Nome do Projeto</th>
                                    <th scope="col">Nota</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php for ($i=1;$i<=5;$i++) : ?>
                                <tr>
                                    <td>Projeto 00<?=$i;?></td>
                                    <td>-</td>
                                    <td>01/01/2022</td>
                                    <td><span class="text-info">Avaliação Pendente</span></td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="color-link mr-1">Avaliar</a>
                                            <a href="#" class="color-999 ml-1">Finalizar Avaliação</a>
                                        </div>
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

                <!-- card panel ferramentas adm -->
                <?php require('_includes/_toolsAdmJurors.php'); ?>
                <!-- end card panel -->
            </div>
        </div>
    </div>
</main>