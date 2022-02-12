<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">
        <?php 
        $detalhes = true;
        $status = 'pendente';
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


<div class="modal fade" id="modalDetalhesResumo" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-black">
                <h5 class="modal-title text-uppercase color-white fs-16">Detalhes do Projeto <span id="number-project">001</span> | <span id="status-project" class="text-danger">Finalização Pendente</span></h5>
                <button type="button" class="close color-white color-white-hover" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-default">
                        <tbody class="text-left w-auto fs-15">
                            <tr>
                                <td class="bg-eee"><strong>Nome do Responsável:</strong></td>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>João Santos</span>
                                        <a href="#" class="color-999 fs-13 ml-3" style="max-width: 88px">Ver dados para emissão de NF</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>.color-gray, .text-gray
                                <td class="bg-eee"><strong>Pagamento:</strong></td>
                                <td><spam class="text-danger">Pendente</spam></td>
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
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

