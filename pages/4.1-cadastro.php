<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">
        <?php 
        $stepCurrent = 1;
        $stepCurrentText = 'Identificação e dados do responsável';
        require('_includes/_stepsButtons.php'); 
        ?>

        <form action="4.2-cadastro.php" id="form-register" class="px-2 py-5 form-register form-default">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>CNPJ:*</label>
                        <input type="text" class="form-control mask-cnpj cnpj-dynamic" name="cnpj" required>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Razão Social:*</label>
                        <input type="text" class="form-control" name="razao-social" required id="razao_social">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label>Nome Fantasia:*</label>
                        <input type="text" class="form-control" name="nome-fantasia" required id="nome_fantasia">
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label>CEP:*</label>
                        <input type="text" class="form-control mask-zipcode" name="cep" required id="cep">
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Endereço:*</label>
                        <input type="text" class="form-control" name="endereco" required id="endereco">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Estado (UF):*</label>
                        <select class="form-control" name="estado" required id="estado">
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
                        <input type="text" class="form-control" name="cidade" required id="cidade">
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label>Número:*</label>
                        <input type="number" class="form-control" name="número" required id="numero">
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Complemento:</label>
                        <input type="text" class="form-control" name="complemento" id="complemento">
                    </div>
                </div>
            </div>

            <div class="divisor-group-form"></div>
               
            <div class="row">
                <div class="col-12"><h6 class="fs-26 fw-600 my-4">DADOS DO RESPONSÁVEL PELA INSCRIÇÃO DO CASE</h6></div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Nome Completo:*</label>
                        <input type="text" class="form-control" name="nome_completo" required>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Telefone:*</label>
                        <input type="text" class="form-control mask-phone" name="telefone" required>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>E-mail:*</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Confirme seu e-mail:*</label>
                        <input type="email" class="form-control" name="confirmar_email" required>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Crie uma senha:*</label>
                        <input type="password" class="form-control" name="senha" required>
                        <small class="form-text text-muted">
                            <ul class="list-style-disc mt-3 p-0 px-2 color-black">
                                <li>Mínimo de 8 caracteres;</li>
                                <li>Utilize apenas letras e números.</li>
                            </ul>
                        </small>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Repita a senha:*</label>
                        <input type="password" class="form-control" name="repetir_senha" required>
                        <small class="form-text text-muted">
                            <ul class="list-style-disc mt-3 p-0 px-2 color-black">
                                <li>Mínimo de 8 caracteres;</li>
                                <li>Utilize apenas letras e números.</li>
                            </ul>
                        </small>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <button type="submit" class="btn bg-black fs-26 fw-600 color-white w-100 py-3 mt-5">CONTINUAR</button>

                    <p class="text-danger mt-4">Os campos marcados com * são de preenchimento obrigatório.</p>
                </div>
            </div>
        </form>

    </div>
</main>
