<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">Relatórios de Usuários</h6>
                    </header>

                    <!-- FILTRO STATUS -->
                    <?php require('_includes/_filtersUsers.php'); ?>
                    <!-- FIM FILTRO STATUS -->

                    <div class="table-responsive">
                        <table class="table table-bordered table-default">
                            <thead>
                                <tr class="table-active text-center">
                                    <th scope="col">Razão Social</th>
                                    <th scope="col">CNPJ</th>
                                    <th scope="col">Estado (UF)</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Nome Usuário</th>
                                    <th scope="col">E-mail</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php for ($i=1;$i<=5;$i++): ?>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <span class="mr-1">Minha Razão Social</span>
                                            <a href="#" class="color-link ml-1">Ficha Cadastral</a>
                                        </div>
                                    </td>
                                    <td>28.634.508/0001-60</td>
                                    <td>SP</td>
                                    <td>Nome da Cidade</td>
                                    <td>João Silva</td>
                                    <td>contato@dominio.com.br</td>
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