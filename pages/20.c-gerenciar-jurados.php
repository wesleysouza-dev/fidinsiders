<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">Gerenciar jurados</h6>
                    </header>

                    <!-- alert important -->
                    <?php require('_includes/_alertImportant.php'); ?>
                    <!-- end alert important -->

                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="text-left color-white">
                                    <th colspan="2" scope="col" class="bg-black">PROJETO 001</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <?php for($i=1;$i<5;$i++) : ?>
                                <tr>
                                    <td>Nome do Jurado <?=$i;?></td>
                                    <td width="18%">
                                        <a href="#" class="text-danger" data-toggle="modal" data-target="#modalConfirm">
                                            <i class="bi bi-trash"></i>
                                            REMOVER
                                        </a>
                                    </td>
                                </tr>
                                <?php endfor; ?>

                                <tr class="bg-success-light">
                                    <td>Nome do Jurado <?=$i;?></td>
                                    <td width="18%">
                                        <a href="#" class="text-danger" data-toggle="modal" data-target="#modalConfirm">
                                            <i class="bi bi-trash"></i>
                                            REMOVER
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <p class="text-success" id="status-removed">O jurado foi removido com sucesso.</p>
                    </div>
                </section>
                <!-- end card panel -->

                <section class="card-form">
                    <form action="">
                        <div class="form-group">
                            <label class="fw-600">
                                ADICIONE JURADOS AO PROJETO:
                                <span class="status text-success ml-3 fw-500 fs-14">Adicionado com sucesso!</span>
                            </label>
                            
                            <div class="d-flex justify-content-between">
                                <select name="add_jurados" class="form-control border-1-black">
                                    <option value="">Nome do Jurado 1</option>
                                    <option value="">Nome do Jurado 2</option>
                                    <option value="">Nome do Jurado 3</option>
                                </select>
                                <button class="btn bg-black color-white ml-3">ADICIONAR</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <!-- MODAL CONFIRM DELETE -->
    <div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-black">
                    <h5 class="modal-title text-uppercase color-white text-center w-100">DESEJA REMOVER: NOME DO JURADO</h5>
                    <button type="button" class="close color-white color-white-hover" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="px-0 px-md-5 text-center">
                    Caso exista alguma avaliação feita pelo jurado(a) neste projeto, as notas também serão excluídas definitivamente.
                    </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn bg-black color-white">CONFIRMAR</button>
                    <button type="button" class="btn border-1-black" data-dismiss="modal">FECHAR</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL CONFIRM DELETE -->
</main>