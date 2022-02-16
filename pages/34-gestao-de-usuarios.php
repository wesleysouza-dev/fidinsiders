<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">Gestão de Usuários</h6>

                        <div class="buttons pl-0 pl-md-5 mt-2 mt-md-0 d-flex flex-wrap">
                            <a href="33-incluir-jurado" class="bg-black my-2 color-white">Incluir novo jurado</a>
                        </div>
                    </header>

                    <article class="card-search mb-5">
                        <form action="">
                            <div class="form-group d-flex align-items-center">
                                <input type="search" class="form-control border-1-black max-400" placeholder="Buscar por nome, e-mail ou CNPJ">
                                <button class="btn bg-black color-white d-flex ml-4 px-4">
                                    <i class="bi bi-search my-1 mr-2"></i>
                                    <span class="my-1">BUSCAR</span>
                                </button>
                            </div>
                        </form>
                    </article>

                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="table-active text-center">
                                    <th scope="col">Nome Usuário</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">CNPJ</th>
                                    <th scope="col">Projetos<br> enviados</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php for($i=1;$i<5;$i++) : ?>
                                <tr>
                                    <td>João Silva</td>
                                    <td>contato@dominio.com.br</td>
                                    <td>00.000.000/0001-00</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <span>04</span>
                                            <a href="#" class="color-link ml-1">Ver</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="color-link ml-1">Ver dados cadastrais</a>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                                <tr>
                                    <td>João Silva</td>
                                    <td>contato@dominio.com.br</td>
                                    <td>00.000.000/0001-00</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <span>0</span>
                                            <span class="color-999 ml-1">Ver</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="color-link ml-1">Ver dados cadastrais</a>
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

    <!-- MODAL CONFIRM BLOCK -->
    <div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-black">
                    <h5 class="modal-title text-uppercase color-white text-center w-100">CONFIRMA O BLOQUEIO DE ACESSO?</h5>
                    <button type="button" class="close color-white color-white-hover" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="px-0 px-md-5 text-center">
                        <b>JURADO(A):</b> João Silva <br>

                        Os projetos ainda não avaliados poderão ser direcionados a outro jurado (a) <br>
                        O bloqueio não afeta os projetos já avaliados pelo usuário.
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