<main class="bg-body-2-images py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- card panel -->
                <section class="card-panel">
                    <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                        <h6 class="my-2 pr-3 pr-md-5">Incluir novo Jurado</h6>
                    </header>

                    <!-- alert important -->
                    <div class="bg-black my-2 color-white px-4 py-2">
                        <i class="bi bi-exclamation-triangle mr-2"></i>
                        <b>PREENCHA OS DADOS ABAIXO PARA INCLUIR UM NOVO JURADO (A):</b>
                    </div>
                    <!-- end alert important -->
                </section>
                <!-- end card panel -->

                <section>
                    <form action="">
                        <div class="form-group">
                            <label class="fw-600">NOME DO JURADO:*</label>
                            <input type="text" name="" class="form-control border-1-black">
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="fw-600">E-MAIL:*</label>
                                    <input type="email" name="" class="form-control border-1-black">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="fw-600">CONFIRME O E-MAIL:*</label>
                                    <input type="email" name="" class="form-control border-1-black">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <button class="btn bg-black color-white mr-3">ADICIONAR</button>
                            <!-- caso queira msg derro do figma -->
                            <!--<span class="status text-success ml-3 fw-500 fs-14"><b class="fw-900">Cadastro efetuado com sucesso!</b> Um e-mail foi disparado ao usuário com as instruções para o cadastro de uma senha de acesso.</span>-->
                            <!-- fim caso queira msg derro do figma -->
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>

</main>

<?php
    $scriptFooter = "<script>$(function(){toastNotification('Cadastro efetuado com sucesso!', 'success', 'Um e-mail foi disparado ao usuário com as instruções para o cadastro de uma senha de acesso.')})</script>";
?>