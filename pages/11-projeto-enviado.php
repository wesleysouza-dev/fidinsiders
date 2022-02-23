<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">
        <!-- tabela resumo -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <header class="bg-black py-3 px-3">
                    <h5 class="modal-title text-uppercase color-white fs-16">Detalhes do Projeto <span id="number-project">001</span> | <span class="color-white">Enviado em <span id="data-envio">00/00/0000</span></span></h5>
                </header>
                <div class="table-responsive">
                    <table class="table table-bordered table-default">
                        <tbody class="text-left w-auto fs-15">
                            <tr>
                                <td class="bg-eee"><strong>Pagamento:</strong></td>
                                <td><spam class="text-success">Confirmado</spam></td>
                            </tr>
                            <tr>
                                <td class="bg-eee"><strong>Valor:</strong></td>
                                <td class="text-success">R$450,00</td>
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
        $stepCurrent = 6;
        $stepCurrentText = 'CONFIRMAÇÃO E PAGAMENTO';
        require('_includes/_stepsButtons.php'); 
        ?>

        <div class="row">
            <div class="col-12 mt-5">
            <p class="text-success fw-600">OBRIGADO!</p>
            <p>Seu pagamento foi confirmado e as informações foram encaminhadas para seu e-mail.</p>
            </div>

            <div class="col-12">
                <div class="buttons-group d-inline-block d-md-flex flex-wrap mt-4">
                    <button type="button" onclick="window.location.href='#'" class="btn bg-white border-black fs-24 fw-600 color-black w-100 py-3 my-2 px-5 ml-0 w-auto">MINHA CONTA</button>
                </div>
            </div>
        </div>

    </div>
</main>
