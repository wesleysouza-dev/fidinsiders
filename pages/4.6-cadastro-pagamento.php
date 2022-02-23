<?php
    //Incluir o arquivo de configuração
    require_once('pagseguro/config.php');
    require_once('pagseguro/utils.php');
?>
<?php 
        $params = array(
            'email' => $PAGSEGURO_EMAIL,
            'token' => $PAGSEGURO_TOKEN
        );
        $header = array();
        $status_pagseguro = false;
        $sessionCode = false;

        $response = curlExec($PAGSEGURO_API_URL."/sessions", $params, $header);
        print_r($response);

        if ($response && $response !== 'Unauthorized') {
            $json = json_decode(json_encode(simplexml_load_string($response)));

            if ($json) {
                $sessionCode = $json->id;
                print_r($json);
                $status_pagseguro = true;
            }
            
        }
        
        

        
        print_r($status_pagseguro);
        
        
    ?>
<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">
        <?php 
        $stepCurrent = 6;
        $stepCurrentText = 'CONFIRMAÇÃO E PAGAMENTO';
        require('_includes/_stepsButtons.php'); 
        ?>
        <div class="row">
            <div class="col-12 col-lg-8 my-5">
                <div class="card">
                    <div class="card-header p-3 p-lg-5">
                        <div class="pt-4 pl-2 pr-2 pb-2">
                            <ul role="tablist" class="nav nav-pills rounded nav-fill mb-3">
                                <li class="nav-item"> 
                                    <a data-toggle="pill" href="#credit-card" class="nav-link active"> 
                                        <i class="bi bi-credit-card-2-front-fill mr-2"></i> 
                                        Cartão de Crédito
                                    </a> 
                                </li>
                                <li class="nav-item"> 
                                    <a data-toggle="pill" href="#ticket" class="nav-link "> 
                                        <i class="bi bi-upc mr-2"></i> Boleto 
                                    </a> 
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="credit-card" class="tab-pane fade show active pt-3">
                                <form role="form" action="pagseguro/payment.php" method="post" onsubmit="event.preventDefault()" id="payment-form">
                                    <!-- inputs hidden | Apagar amount após teste, o valor deverá ser inserido direto, sem input -->
                                    <input type="hidden" name="brand">
                                    <input type="hidden" name="token">
                                    <input type="hidden" name="senderHash">
                                    <!-- <input type="hidden" name="amount" value="209.99"> -->
                                    <!-- fim input hidden -->

                                    <div class="form-group"> 
                                        <label>
                                            <h6>Nome do Títular*</h6>
                                        </label> 
                                        <input type="text" name="cardHolder" placeholder="Nome descrito no cartão" id="titular" class="form-control" value="teste teste"> 
                                    </div>
                                    <div class="form-group"> <label for="cardNumber">
                                            <h6>Número do cartão*</h6>
                                        </label>
                                        <div class="input-group"> 
                                            <input type="text" name="cardNumber" placeholder="Apenas número" class="form-control mask-credit-card" required value="4111 1111 1111 1111">
                                            <div class="input-group-append"> 
                                                <span class="input-group-text text-muted"> <i class="bi bi-credit-card-2-front mx-1"></i>
                                                <i class="bi bi-credit-card-2-back mx-1"></i>
                                                </span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group"> 
                                                <label>
                                                    <span class="hidden-xs">
                                                        <h6>Selecione a Parcela*</h6>
                                                    </span>
                                                </label>
                                               <select name="installments" class="form-control"  id="select-installments" required>
                                                   <option value="null">Aguardando cartão...</option>
                                                </select>
                                                <input type="hidden" name="installmentValue">
                                                <div class="mt-2" style="display:none" id="loading-installments">
                                                    <div class="spinner-border spinner-border-sm" role="status">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                    <small>aguarde, carregando parcelas...</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group"> 
                                                <label>
                                                    <span class="hidden-xs">
                                                        <h6>Data de Vencimento*</h6>
                                                    </span>
                                                </label>
                                               <input type="text" placeholder="Mes/Ano" name="dueDate" class="form-control mask-date-card" required value="12/2026">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-4">
                                                <label data-toggle="tooltip" title="Código de 3 dígitos no verso do cartão">
                                                    <h6>CVV*
                                                        <i class="bi bi-question-circle-fill d-inline"></i>
                                                    </h6>
                                                </label> 
                                                <input type="text" required name="cvv" class="form-control" value="123"> 
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        
                       
                            <div id="ticket" class="tab-pane fade pt-3">
                                <form role="form" onsubmit="event.preventDefault()">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group"> 
                                                <label>
                                                    <h6>Nome completo</h6>
                                                </label> 
                                                <input type="text" name="" placeholder="" required class="form-control"> 
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group"> 
                                                <label>
                                                    <h6>E-mail para envio de boleto</h6>
                                                </label> 
                                                <input type="email" name="" placeholder="" required class="form-control"> 
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-3">
                                            <div class="form-group"> 
                                                <label>
                                                    <h6>CEP</h6>
                                                </label> 
                                                <input type="text" name="" placeholder="" required class="form-control"> 
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-9">
                                            <div class="form-group"> 
                                                <label>
                                                    <h6>Endereço</h6>
                                                </label> 
                                                <input type="text" name="" placeholder="" required class="form-control"> 
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-3">
                                            <div class="form-group"> 
                                                <label>
                                                    <h6>Número</h6>
                                                </label> 
                                                <input type="text" name="" placeholder="" required class="form-control"> 
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-5">
                                            <div class="form-group"> 
                                                <label>
                                                    <h6>Bairro</h6>
                                                </label> 
                                                <input type="text" name="" placeholder="" required class="form-control"> 
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-4">
                                            <div class="form-group"> 
                                                <label>
                                                    <h6>Complemento</h6>
                                                </label> 
                                                <input type="text" name="" placeholder="" required class="form-control"> 
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-6">
                                            <div class="form-group"> 
                                                <label>
                                                    <h6>Cidade</h6>
                                                </label> 
                                                <input type="text" name="" placeholder="" required class="form-control"> 
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-6">
                                            <div class="form-group"> 
                                                <label>
                                                    <h6>Estado</h6>
                                                </label> 
                                                <select class="form-control" name="estado" required>
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
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- end card -->
            </div> <!-- end col -->

            <div class="col-12 col-lg-4 my-5">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Resumo</span>
                    <span class="badge badge-secondary badge-pill">1 item</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Inscrição ao Prêmio Fidinsider</h6>
                        <small class="text-muted">Em 1x de R$450,00</small>
                    </div>
                    <span class="text-muted">R$450,00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Frete</h6>
                            <small class="text-muted">Não se aplica</small>
                        </div>
                        <span class="text-muted">R$0,00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Desconto</h6>
                            <small class="text-muted">Não aplicado</small>
                        </div>
                        <span class="text-muted">-R$0,00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Subtotal</h6>
                            <small class="text-muted">Em 1x de R$450,00</small>
                        </div>
                        <span class="text-muted">R$450,00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Total a pagar</h6>
                    </div>
                    <span class="text-success">R$450,00</span>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cupom de desconto">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Aplicar</button>
                        </div>
                    </div>
                </form>

                <div class="payment-pagseguro d-flex align-items-center justify-content-center mt-4">
                    <p class="mb-0 fs-13 my-2 mx-2">Pagamento processado por:</p>
                    <img src="assets/images/logotipo-pagseguro.png" alt="Pagseguro">
                </div>
            </div>

            <div class="col-12">
                <div class="buttons-group d-inline-block d-md-flex flex-wrap mt-4">
                    <button type="button" onclick="window.location.href='4.5-cadastro'" class="btn bg-white border-black fs-24 fw-600 color-black w-100 py-3 my-2 px-5 ml-0 w-auto">VOLTAR</button>

                    <button type="button" class="btn bg-black fs-24 fw-600 color-white w-100 py-3 my-2 px-5 w-auto ml-md-4" id="payment-confirm">CONFIRMAR PAGAMENTO</button>
                </div>
            </div>
        </div>
</main>


<?php $scriptFooter = '
<script>
 var PROJECT_ID = 2
 var AMOUNT = 150
 var SESSION_CODE = "'.$sessionCode.'"
 var STATUS_PAGAMENTO = ["Aguardando pagamento","Em análise","Paga","Disponível","Em disputa","Devolvida","Cancelada"]
 var LOADING_INSTALLMENTS = $("#loading-installments")
</script>
<script type="text/javascript" src="'.$JS_FILE_URL.'"></script>
<script src="assets/js/payments.js"></script>'; 
?>

<!-- <script src="https://assets.pagseguro.com.br/checkout-sdk-js/rc/dist/browser/pagseguro.min.js"></script> -->