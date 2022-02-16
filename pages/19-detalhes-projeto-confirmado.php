<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">
        <!-- tabela resumo -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <header class="bg-black py-3 px-3">
                    <h5 class="modal-title text-uppercase color-white fs-16">Detalhes do Projeto <span id="number-project">001</span> | <span id="status-project" class="text-success">Finalizado</span></h5>
                </header>
                <div class="table-responsive">
                    <table class="table table-bordered table-default">
                        <tbody class="text-left w-auto fs-15">
                            <tr>
                                <td class="bg-eee"><strong>Nome do Responsável:</strong></td>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>João Santos</span>
                                        <a href="#" class="color-link fs-13 ml-3" style="max-width: 200px"  data-toggle="modal" data-target="#modalNf">Ver dados para emissão de NF</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-eee"><strong>Pagamento:</strong></td>
                                <td><spam class="text-success">Confirmado</spam></td>
                            </tr>
                            <tr>
                                <td class="bg-eee"><strong>Valor:</strong></td>
                                <td>R$450,00</td>
                            </tr>
                            <tr>
                                <td class="bg-eee"><strong>Data:</strong></td>
                                <td>05/01/2022</td>
                            </tr>
                            <tr>
                                <td class="bg-eee"><strong>Avaliação:</strong></td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <span class="mr-2">Pendente</span>
                                        <!-- <div class="d-flex align-items-center fs-13">
                                            <span class="mr-2">Jurado: <b>João Silva</b></span>
                                            <a href="#" class="color-link">Alterar</a>
                                        </div> -->
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- fim tabela resumo -->

        <?php 
        $detalhes = true;
        $status = 'finalizado';
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
                                <input type="text" class="form-control" name="executivo_responsavel_nome" placeholder="Nome" value="João Santos" disabled required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control" name="executivo_responsavel_cargo" placeholder="Cargo" value="Diretor" disabled required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control" name="executivo_responsavel_email" placeholder="E-mail" value="santosjoao@empresa.com.br" disabled required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control mask-phone" name="executivo_responsavel_telefone" placeholder="Telefone" value="1112345678" disabled required>
                            </div>
                        </div>
                    </div>
                </div>
               
               
                <label class="col-12">Executivo da empresa beneficiada que receberá o prêmio, caso seja o vencedor:*</label>

                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control" name="executivo_empresa_nome" placeholder="Nome" value="João Santos" disabled required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control" name="executivo_empresa_cargo" placeholder="Cargo" value="João Santos" disabled required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control" name="executivo_empresa_email" placeholder="E-mail" value="silvamaria@empresa.com.br" disabled required>
                            </div>

                            <div class="col-12 col-lg-6 my-2">
                                <input type="text" class="form-control mask-phone" name="executivo_empresa_telefone" placeholder="Telefone" value="12345678" disabled required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</main>

<!-- MODAL NF -->
<div class="modal fade bd-example-modal-xl" id="modalNf" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-black">
                    <h5 class="modal-title text-uppercase color-white text-center w-100 d-flex justify-content-between">
                        <span>
                        DADOS PARA EMISSÃO DE NOTA FISCAL |  PROJETO 001  | VALOR: R$450,00
                        </span>
                        <span class="text-success">PAGAMENTO CONFIRMADO</span>
                    </h5>
                    <button type="button" class="close color-white color-white-hover" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="px-0 px-md-5 text-center">
                        <div class="row px-5">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>CNPJ:*</label>
                                    <input type="text" class="form-control mask-cnpj cnpj-dynamic" name="cnpj" required value="13522904000129" disabled>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Razão Social:*</label>
                                    <input type="text" class="form-control" name="razao-social" required id="razao_social" value="SOCIAL AGENCIA DIGITAL LTDA" disabled>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nome Fantasia:*</label>
                                    <input type="text" class="form-control" name="nome-fantasia" required id="nome_fantasia" value="AGENCIA DIGITAL" disabled>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>CEP:*</label>
                                    <input type="text" class="form-control mask-zipcode" name="cep" required id="cep" value="01405-000" disabled>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8">
                                <div class="form-group">
                                    <label>Endereço:*</label>
                                    <input type="text" class="form-control" name="endereco" required id="endereco" value="RUA PAMPLONA, JARDIM PAULISTA" disabled>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Estado (UF):*</label>
                                    <select class="form-control" name="estado" required id="estado" disabled>
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
                                    <input type="text" class="form-control" name="cidade" required id="cidade" value="São Paulo" disabled>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Número:*</label>
                                    <input type="number" class="form-control" name="número" required id="numero" value="518" disabled>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8">
                                <div class="form-group">
                                    <label>Complemento:</label>
                                    <input type="text" class="form-control" name="complemento" id="complemento" value="ANDAR: 7" disabled>
                                </div>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
<!-- END MODAL NF -->

