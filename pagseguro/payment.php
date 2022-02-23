<?php header('Content-Type: application/json; charset=utf-8');
    require_once('config.php');
    require_once('utils.php');

    $creditCardToken = null;
    $senderHash = null;
    $itemAmount =  null;
    $installmentValue = null;
    $installmentsQty = null;

    if (isset($_POST['token'])) {
        $creditCardToken = (htmlspecialchars($_POST["token"]));
    }

    if (isset($_POST['token'])) {
        $senderHash = (htmlspecialchars($_POST["senderHash"]));
    }
    
    if (isset($_POST['amount'])) {
        $itemAmount = number_format($_POST["amount"], 2, '.', '');
    }
    
    if (isset($_POST['installmentValue'])) {
        $installmentValue = number_format($_POST["installmentValue"], 2, '.', '');
    }
    
    if (isset($_POST['installments'])) {
        $installmentsQty = $_POST["installments"];
    }
    

    if ($creditCardToken === null || $senderHash === null || $itemAmount === null || $installmentsQty === null || $installmentValue === null) {
        echo json_encode(['status' => 'failed', 'responseText' => 'Dados incompletos para realizar pagamento. Contate o administrador do sistema!']);
        return false;
    }

    $params = array(
        'email'                     => $PAGSEGURO_EMAIL,  
        'token'                     => $PAGSEGURO_TOKEN,
        'creditCardToken'           => $creditCardToken,
        'senderHash'                => $senderHash,
        'receiverEmail'             => $PAGSEGURO_EMAIL,
        'paymentMode'               => 'default', 
        'paymentMethod'             => 'creditCard', 
        'currency'                  => 'BRL',
        // 'extraAmount'               => '1.00',
        'itemId1'                   => '0001',
        'itemDescription1'          => 'Projeto Tal Tal',  
        'itemAmount1'               => $itemAmount,  
        'itemQuantity1'             => 1,
        'reference'                 => 'REF1234',
        'senderName'                => 'Chuck Norris',
        'senderCPF'                 => '54793120652',
        'senderAreaCode'            => 83,
        'senderPhone'               => '999999999',
        'senderEmail'               => 'ChuckNorris@sandbox.pagseguro.com.br',
        'shippingAddressStreet'     => 'Address',
        'shippingAddressNumber'     => '1234',
        'shippingAddressDistrict'   => 'Bairro',
        'shippingAddressPostalCode' => '58075000',
        'shippingAddressCity'       => 'João Pessoa',
        'shippingAddressState'      => 'PB',
        'shippingAddressCountry'    => 'BRA',
        'shippingType'              => 1,
        // 'shippingCost'              => $shippingCoast,
        'maxInstallmentNoInterest'      => 2,
        'noInterestInstallmentQuantity' => 2,
        'installmentQuantity'       => $installmentsQty,
        'installmentValue'          => $installmentValue,
        'creditCardHolderName'      => 'Chuck Norris',
        'creditCardHolderCPF'       => '54793120652',
        'creditCardHolderBirthDate' => '01/01/1990',
        'creditCardHolderAreaCode'  => 83,
        'creditCardHolderPhone'     => '999999999',
        'billingAddressStreet'     => 'Address',
        'billingAddressNumber'     => '1234',
        'billingAddressDistrict'   => 'Bairro',
        'billingAddressPostalCode' => '58075000',
        'billingAddressCity'       => 'João Pessoa',
        'billingAddressState'      => 'PB',
        'billingAddressCountry'    => 'BRA'
    );

    $header = array('Content-Type' => 'application/json; charset=UTF-8;');
    $response = curlExec($PAGSEGURO_API_URL."/transactions", $params, $header);
    $json = json_decode(json_encode(simplexml_load_string($response)));

    if (isset($json->error)) {
        echo json_encode(['code' => false, 'status' => 'failed', 'responseText' => 'Erro ao efetuar o pagamento. Contate o administrador do sistema!']);
        return;
    }

    if (!isset($json->code)) {
        $json->code =  false;
    }

    echo json_encode(['code' => $json->code, 'status' => $json->status, 'response' => $json]);
