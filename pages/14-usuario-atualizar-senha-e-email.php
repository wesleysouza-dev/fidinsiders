<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">

        <!-- card panel -->
        <section class="card-panel">

            <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                <h6 class="my-2 pr-3 pr-md-5">Atualizar Senha e E-mail</h6>
            </header>


            <form action="" class="px-2 py-5 form-register form-default">

                <div class="row">
                    <div class="col-12">
                        <h6 class="fs-18 fw-600 mb-4">ATUALIZAÇÃO DAS CREDENCIAIS DE ACESSO:</h6>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>E-mail:*</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Confirme o e-mail:*</label>
                            <input type="email" class="form-control" name="email_confirmacao" required>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Nova Senha:*</label>
                            <input type="password" class="form-control" name="nova_senha" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Repita a senha:*</label>
                            <input type="password" class="form-control" name="senha_repita" required>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Senha atual:</label>
                            <input type="password" class="form-control" name="senha_atual">
                        </div>
                    </div>
                </div>

                <!-- Buttons Update User -->
                <?php require('_includes/_buttonsUpdateUser.php'); ?>
                <!-- End Buttons Update User -->
             
            </form>

        </section>

    </div>
</main>


<?php
    $scriptFooter = "<script>$(function(){toastNotification('Sucesso!', 'success', 'Dados salvos com sucesso!')})</script>";
?>