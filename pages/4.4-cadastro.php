<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">
        <?php 
        $stepCurrent = 4;
        $stepCurrentText = 'Gestores do projeto';
        require('_includes/_stepsButtons.php'); 
        ?>

        <form action="4.5-cadastro" id="form-register" class="px-2 py-5 form-register form-default">
            <div class="row">
                <label class="col-12">Executivo responsável pelo projeto na empresa beneficiada:*</label>

                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control" name="executivo_responsavel_nome" placeholder="Nome" required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control" name="executivo_responsavel_cargo" placeholder="Cargo" required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control" name="executivo_responsavel_email" placeholder="E-mail" required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control mask-phone" name="executivo_responsavel_telefone" placeholder="Telefone" required>
                            </div>
                        </div>
                    </div>
                </div>
               
               
                <label class="col-12">Executivo da empresa beneficiada que receberá o prêmio, caso seja o vencedor:*</label>

                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control" name="executivo_empresa_nome" placeholder="Nome" required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control" name="executivo_empresa_cargo" placeholder="Cargo" required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control" name="executivo_empresa_email" placeholder="E-mail" required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control mask-phone" name="executivo_empresa_telefone" placeholder="Telefone" required>
                            </div>
                        </div>
                    </div>
                </div>
               
                <?php require('_includes/_buttonsRegister.php'); ?>
               
            </div>
        </form>

    </div>
</main>
