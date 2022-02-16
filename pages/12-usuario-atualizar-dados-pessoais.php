<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">

        <!-- card panel -->
        <section class="card-panel">

            <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                <h6 class="my-2 pr-3 pr-md-5">Atualizar dados Pessoais</h6>
            </header>


            <form action="" class="px-2 py-5 form-register form-default">

                <div class="row">
                    <div class="col-12">
                        <h6 class="fs-18 fw-600 mb-4">DADOS DO RESPONSÁVEL PELA INSCRIÇÃO DO CASE</h6>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="form-group mb-3">
                            <label>Nome Completo:*</label>
                            <input type="text" class="form-control" name="nome_completo" required>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group mb-3">
                            <label>Telefone:*</label>
                            <input type="text" class="form-control mask-phone" name="telefone" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h6 class="fs-18 fw-600 mb-4 mt-5">DADOS DA EMPRESA (UTILIZADO PARA NOTA FISCAL E PAGAMENTO):</h6>
                    </div>
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