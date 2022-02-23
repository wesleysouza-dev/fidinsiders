<?php header('Content-Type: application/json; charset=utf-8');
require_once('config.php');


    $creditCardToken = null;
    $senderHash = null;
    $itemAmount =  null;
    $installmentValue = null;
    $installmentsQty = null;

    // if (isset($_POST['token'])) {
    //     $creditCardToken = (htmlspecialchars($_POST["token"]));
    // }

    // if (isset($_POST['senderHash'])) {
    //     $senderHash = (htmlspecialchars($_POST["senderHash"]));
    // }
    
    // if (isset($_POST['amount'])) {
    //     $itemAmount = number_format($_POST["amount"], 2, '.', '');
    // }
    
    // if (isset($_POST['installmentValue'])) {
    //     $installmentValue = number_format($_POST["installmentValue"], 2, '.', '');
    // }
    
    // if (isset($_POST['installments'])) {
    //     $installmentsQty = $_POST["installments"];
    // }
    

    // if ($creditCardToken === null || $senderHash === null || $itemAmount === null || $installmentsQty === null || $installmentValue === null) {
    //     echo json_encode(['status' => 'failed', 'responseText' => 'Dados incompletos para realizar pagamento. Contate o administrador do sistema!']);
    //     return false;
    // }


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://sandbox.api.pagseguro.com/charges');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"reference_id": "ex-00001",
    "description": "Wesley Teste Postman2",
    "amount": {
      "value": 5000,
      "currency": "BRL"
    },
    "payment_method": {
      "type": "CREDIT_CARD",
      "installments": 1,
      "capture": false,
      "soft_descriptor": "Site Fidinsiders",
      "card": {
        "number": "1156161616",
        "exp_month": "03",
        "exp_year": "2026",
        "security_code": "123",
        "holder": {
            "name": "Jose da Silva"
        }
      }
    },
    "notification_urls": [
      "https://yourserver.com/nas_ecommerce/277be731-3b7c-4dac-8c4e-4c3f4a1fdc46/"
    ],
    "metadata": {
        "Exemplo": "Aceita qualquer informação",
      "NotaFiscal": "123",
      "idComprador": "123456"
    }}');

$headers = array();
$headers[] = 'Authorization: '.$PAGSEGURO_TOKEN.'';
$headers[] = 'Content-Type: application/json';
$headers[] = 'X-Api-Version: 4.0';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
    curl_close($ch);
    return;
}
echo($result);
curl_close($ch);

