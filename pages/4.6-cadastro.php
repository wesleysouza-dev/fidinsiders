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
                            <select class="form-control" name="responsavel_responsavel_diferente_nf" required>
                                <option disabled selected>Selecione</option>
                                <option>Sim, desejo informar novos dados para emissão da Nota Fiscal.</option>
                                <option>Não, manter os dados já informados para emissão da Nota Fiscal.</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row" id="other-person-nf">
                <div class="col-12">
                    <div class="form-group">
                        <label>Informe os dados do responsável pelo pagamento:</label>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>CNPJ:*</label>
                        <input type="text" class="form-control mask-cnpj cnpj-dynamic" name="responsavel_cnpj" required>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Razão Social:*</label>
                        <input type="text" class="form-control" name="responsavel_razao-social" required id="razao_social">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label>Nome Fantasia:*</label>
                        <input type="text" class="form-control" name="responsavel_nome-fantasia" required id="nome_fantasia">
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label>CEP:*</label>
                        <input type="text" class="form-control mask-zipcode" name="responsavel_cep" required id="cep">
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Endereço:*</label>
                        <input type="text" class="form-control" name="responsavel_endereco" required id="endereco">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Estado (UF):*</label>
                        <select class="form-control" name="responsavel_estado" required id="estado">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Cidade:*</label>
                        <input type="text" class="form-control" name="responsavel_cidade" required id="cidade">
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label>Número:*</label>
                        <input type="number" class="form-control" name="responsavel_número" required id="numero">
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Complemento:</label>
                        <input type="text" class="form-control" name="responsavel_complemento" id="complemento">
                    </div>
                </div>
            </div>

            <div class="row">
                <?php 
                $textButtonMain = 'CONTINUAR PARA PAGAMENTO';
                require('_includes/_buttonsRegister.php'); ?>
            </div>
            
        </form>

    </div>
</main>
