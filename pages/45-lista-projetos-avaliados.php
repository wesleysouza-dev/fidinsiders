<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">Projetos Avaliados</h6>
                    </header>

                    <div class="msg-alert mb-4 pb-4">
                        <div class="buttons pl-0 mt-2 mt-md-0 d-flex flex-wrap flex-lg-nowrap align-items-center">
                            <div class="bg-black my-2 color-white px-4 py-2">
                                <i class="bi bi-exclamation-triangle mr-2"></i>
                                <b>IMPORTANTE:</b>
                            </div>
                            <div class="px-3 border-1-black py-2 fs-15">
                            Você pode alterar as suas avaliações até XX/XX/XXXX, após esse período novas alterações estarão bloqueadas na plataforma.
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="table-active text-center">
                                    <th scope="col">Nome do Projeto</th>
                                    <th scope="col">Nota (Pontos)</th>
                                    <th scope="col">Data da Avaliação</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php for ($i=1;$i<=5;$i++) : ?>
                                <tr>
                                    <td>Projeto 00<?=$i;?></td>
                                    <td>98</td>
                                    <td>01/01/2022</td>
                                    <td>
                                        <a href="#" class="color-link">Alterar Avaliação</a>
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
            
            </div>
        </div>
    </div>
</main>