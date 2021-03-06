<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">
        <?php 
        $stepCurrent = 3;
        $stepCurrentText = 'Detalhes do projeto';
        require('_includes/_stepsButtons.php'); 
        ?>

        <form action="4.4-cadastro" id="form-register" class="px-2 py-5 form-register form-default">
            <div class="row">
                <div class="col-12">
                    <label>INSIRA OS PARTICIPANTES DO PROJETO:*</label>
                </div>
            </div>

            <div id="participants-project" class="w-100">
                <div class="row item-participant">
                    <div class="col-12 col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nome_participante[]" placeholder="Nome" required>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email_participante[]" placeholder="E-mail" required>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="cargo_participante[]" placeholder="Cargo" required>
                        </div>
                    </div>

                    <div class="col-12 col-lg-1 d-flex align-items-center">
                        <button type="button" class="btn-control-list btn-plus" data-type="add"><i class="bi bi-plus-circle text-success"></i></button>
                        <button type="button" class="btn-control-list btn-minus d-none" data-type="remove"><i class="bi bi-dash-circle text-danger"></i></button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="text-uppercase">V??deo do pitch de at?? 1 minuto (opcional):</label>
                        <input type="text" class="form-control" name="video_pitch" placeholder="Cole aqui o link do v??deo do Youtube, Vimeo, Google Drive ou outros com acesso p??blico.">
                    </div>
                </div>

                <div class="col-12">
                    <label>D??vidas de como enviar o link do seu v??deo? <a href="#" class="text-black text-underline">Acesse o nosso tutorial</a>.</label>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        
                        <label class="d-flex mt-4 pt-2">
                            <input type="checkbox" class="form-control checkbox-default" name="autorizo_video" required>
                            <span class="mt-1">Autorizo a utiliza????o do v??deo conforme os <a href="#" class="text-black text-underline">Termos de Uso</a>.</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="divisor-group-form"></div>
               
            <div class="row">
                <div class="col-12"><h6 class="fs-26 fw-600 my-4 text-uppercase">descreva os principais benef??cios da solu????o, conforme os seguintes crit??rios:*</h6></div>

                <div class="col-12">
                    <div class="form-group textarea-limit">
                        <label class="fw-400"><b class="fw-600">Inova????o:</b> O projeto utilizou uma solu????o inovadora para democratizar o acesso aos servi??os financeiros e aprimorar a experi??ncia do cliente?*</label>
                        <textarea class="form-control" name="descricao_inovacao" rows="10" maxlength="1000" required></textarea>

                        <div class="limit-characters d-flex justify-content-between">
                            <small class="form-text text-muted">Descreva em at?? mil caracteres.</small>
                            <small class="form-text text-muted"><span class="number-update">0</span> de 1000</small>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group textarea-limit">
                        <label class="fw-400"><b class="fw-600">Solu????o de problema:</b> O projeto identificou e resolveu problemas para facilitar o acesso aos servi??os financeiros e aprimorar a experi??ncia do cliente?*</label>
                        <textarea class="form-control" name="descricao_solucao_problema" rows="10" maxlength="1000" required></textarea>

                        <div class="limit-characters d-flex justify-content-between">
                            <small class="form-text text-muted">Descreva em at?? mil caracteres.</small>
                            <small class="form-text text-muted"><span class="number-update">0</span> de 1000</small>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group textarea-limit">
                        <label class="fw-400"><b class="fw-600">Bem-estar financeiro:</b>  O projeto promove a educa????o financeira e uso consciente de servi??o financeiro?*</label>
                        <textarea class="form-control" name="descricao_bem_estar_financeiro" rows="10" maxlength="1000" required></textarea>

                        <div class="limit-characters d-flex justify-content-between">
                            <small class="form-text text-muted">Descreva em at?? mil caracteres.</small>
                            <small class="form-text text-muted"><span class="number-update">0</span> de 1000</small>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group textarea-limit">
                        <label class="fw-400"><b class="fw-600">Resultados:</b> ?? poss??vel mensurar e avaliar o impacto positivo do projeto para o cliente e para a Institui????o Financeira?*</label>
                        <textarea class="form-control" name="descricao_resultados" rows="10" maxlength="1000" required></textarea>

                        <div class="limit-characters d-flex justify-content-between">
                            <small class="form-text text-muted">Descreva em at?? mil caracteres.</small>
                            <small class="form-text text-muted"><span class="number-update">0</span> de 1000</small>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group textarea-limit">
                        <label class="fw-400"><b class="fw-600">Atra????o e reten????o de clientes:</b> O projeto conseguiu atrair e reter clientes dentro do nicho de usu??rios para o qual foi desenhado?*</label>
                        <textarea class="form-control" name="descricao_atracao_retencao_clientes" rows="10" maxlength="1000" required></textarea>

                        <div class="limit-characters d-flex justify-content-between">
                            <small class="form-text text-muted">Descreva em at?? mil caracteres.</small>
                            <small class="form-text text-muted"><span class="number-update">0</span> de 1000</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divisor-group-form"></div>

            <div class="row">
                <div class="col-12">
                    <h6 class="fs-26 fw-600 my-4 text-uppercase">COMENT??RIOS ADICIONAIS E LINKS:*</h6>
                </div>
                <div class="col-12">
                    <div class="form-group textarea-limit">
                        <textarea class="form-control" name="comentarios_adicionais" rows="10" maxlength="1000" required></textarea>

                        <div class="limit-characters d-flex justify-content-between">
                            <small class="form-text text-muted">Descreva em at?? mil caracteres.</small>
                            <small class="form-text text-muted"><span class="number-update">0</span> de 1000</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php require('_includes/_buttonsRegister.php'); ?>
            </div>
            
        </form>

    </div>
</main>
