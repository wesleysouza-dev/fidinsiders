<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">
        <?php 
        $stepCurrent = 6;
        $stepCurrentText = 'CONFIRMAÇÃO E PAGAMENTO';
        require('_includes/_stepsButtons.php'); 
        ?>

        <form action="4.6-cadastro-pagamento" id="form-register" class="px-2 py-5 form-register form-default">
            <div class="row">
                <div class="col-12">
                    <label>Deseja informar um responsável fiscal diferente, para recebimento da Nota Fiscal?*</label>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label class="d-flex mt-2 pt-2">
                            <select class="form-control" name="responsavel_diferente_nf" required id="responsavel_nf">
                                <option disabled selected>Selecione</option>
                                <option value="sim">Sim, desejo informar novos dados para emissão da Nota Fiscal.</option>
                                <option value="não">Não, manter os dados já informados para emissão da Nota Fiscal.</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row" id="other-person-nf"></div>

            <div class="row">
                <?php 
                $textButtonMain = 'CONTINUAR PARA PAGAMENTO';
                require('_includes/_buttonsRegister.php'); ?>
            </div>
            
        </form>

    </div>
</main>
