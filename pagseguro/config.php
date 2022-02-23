<?php 

    //Config SANDBOX or PRODUCTION environment
    $SANDBOX_ENVIRONMENT = false;
    
    $JS_FILE_URL = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    $PAGSEGURO_API_URL = 'https://ws.pagseguro.uol.com.br/v2';
    if($SANDBOX_ENVIRONMENT){
        $PAGSEGURO_API_URL = 'https://ws.sandbox.pagseguro.uol.com.br/v2';
        $JS_FILE_URL = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    }

    $PAGSEGURO_EMAIL = 'wesley.ribeiro.souza@hotmail.com';
    $PAGSEGURO_TOKEN = '707CEA0F2A82488D8C83605FAB0C8786';

    /* PROD */
    // $PAGSEGURO_EMAIL = 'wesley.ribeiro.souza@hotmail.com';
    // $PAGSEGURO_TOKEN = '83c38bec-bfbe-4968-b130-05313d68796ac8e61df545f1ac7064a2798d6500a6486b50-cd05-4825-acdc-34ec7688716d';

    //link gerar token
    // https://pagseguro.uol.com.br/preferencias/integracoes.jhtml#rmcl