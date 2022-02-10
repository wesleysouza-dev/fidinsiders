<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">
        <?php 
        $stepCurrent = 5;
        $stepCurrentText = 'Autorizações';
        require('_includes/_stepsButtons.php'); 
        ?>

        <form action="4.6-cadastro" id="form-register" class="px-2 py-5 form-register form-default">
            <div class="row">
                <div class="col-12">
                    <label>Você autoriza a divulgação deste case?*</label>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label class="d-flex mt-2 pt-2">
                            <input type="radio" class="form-control checkbox-default" name="autorizo_divulgacao" value="Sim" required>
                            <span class="mt-1 fw-300">Sim, eu autorizamos a divulgação deste case conforme os <a href="#" class="text-black text-underline fw-500">Termos de Uso</a>.</span>
                        </label>

                        <label class="d-flex mt-2 pt-2">
                            <input type="radio" class="form-control checkbox-default" name="autorizo_divulgacao" value="Não" required>
                            <span class="mt-1 fw-300">Não autorizamos a divulgação deste case.</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php require('_includes/_buttonsRegister.php'); ?>
            </div>
            
        </form>

    </div>
</main>
