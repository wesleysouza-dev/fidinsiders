<?php 

    //Config SANDBOX or PRODUCTION environment
    $SANDBOX_ENVIRONMENT = true;
    
    $JS_FILE_URL = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    $PAGSEGURO_API_URL = 'https://ws.pagseguro.uol.com.br/v2';

     /* PROD */
     $PAGSEGURO_EMAIL = 'wesley.ribeiro.souza@hotmail.com';
     $PAGSEGURO_TOKEN = 'f9599a12-78ef-44dc-ae1d-14a3163124c5150d05bc4f64a55d976c3bfc1153d2f7116c-0e9a-404b-b45d-ea014994c496';
     $URL_PAYMENT_CC = 'https://api.pagseguro.com/charges';

    /* SANDBOX */
    if ($SANDBOX_ENVIRONMENT){
        $PAGSEGURO_API_URL = 'https://ws.sandbox.pagseguro.uol.com.br/v2';
        $JS_FILE_URL = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";

        $PAGSEGURO_EMAIL = 'wesley.ribeiro.souza@hotmail.com';
        $PAGSEGURO_TOKEN = '707CEA0F2A82488D8C83605FAB0C8786';
        $URL_PAYMENT_CC = 'https://sandbox.api.pagseguro.com/charges';
    } 
    

    //link gerar token
    // https://pagseguro.uol.com.br/preferencias/integracoes.jhtml#rmcl

    //sandbox
    $PAGSEGURO_PUBLIC_KEY = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAr+ZqgD892U9/HXsa7XqBZUayPquAfh9xx4iwUbTSUAvTlmiXFQNTp0Bvt/5vK2FhMj39qSv1zi2OuBjvW38q1E374nzx6NNBL5JosV0+SDINTlCG0cmigHuBOyWzYmjgca+mtQu4WczCaApNaSuVqgb8u7Bd9GCOL4YJotvV5+81frlSwQXralhwRzGhj/A57CGPgGKiuPT+AOGmykIGEZsSD9RKkyoKIoc0OS8CPIzdBOtTQCIwrLn2FxI83Clcg55W8gkFSOS6rWNbG5qFZWMll6yl02HtunalHmUlRUL66YeGXdMDC2PuRcmZbGO5a/2tbVppW6mfSWG3NPRpgwIDAQAB';