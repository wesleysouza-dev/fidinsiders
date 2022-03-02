/* GLOBALS VARIABLES */

var URL_CNPJ = 'https://publica.cnpj.ws/cnpj/'
var URL_CEP = 'https://viacep.com.br/ws/'
var URL_PAGSEGURO = 'https://sandbox.api.pagseguro.com/'
var URL_NOTIFICATIO_PAGSEGURO = ''
var TOKEN_PAGSEGURO = '707CEA0F2A82488D8C83605FAB0C8786'

/* CNPJ */
function getCNPJ(cnpj) {
    jQuery.get( URL_CNPJ + cnpj)
    .done((data) => {
       const length = Object.keys(data).length
       if (length > 0) {
        loadFieldsByCnpj(data)
       }
    })
    .fail((data) => {
        toastNotification('Aviso', 'error', data?.responseJSON?.detalhes)
    })
    .always((data) => {
        console.log( "finished" );
    });
}

/* CEP */
function getZipcode(zipcode) {
    jQuery.get( URL_CEP + zipcode + '/json')
    .done((data) => {
       console.log( "data", data );
       const length = Object.keys(data).length
       if (length > 0) {
        loadFieldsByZipcode(data)
       }
    })
    .fail((data) => {
        console.error('erro', data)
        toastNotification('Aviso', 'error', 'erro ao carregar cep')
    })
    .always((data) => {
        console.log( "finished" );
    });
}



/* Populated fields by CNPJ */
function loadFieldsByCnpj(data) {
    let estabelecimento

    for (const key in data) {
        $('input#' + key).val(data[key])
        estabelecimento = key === 'estabelecimento' ? data[key] : ''

        for (const key in estabelecimento) {
            if (key === 'cep') {
                $('input#' + key).val(estabelecimento[key]).mask('99999-999')
            } else if (key === 'cidade') {
                $('input#' + key).val(estabelecimento[key].nome)
            } else {
                $('input#' + key).val(estabelecimento[key])
            }
        }
    }
    $('input#endereco').val(estabelecimento?.tipo_logradouro + ' ' + estabelecimento?.logradouro + ', ' + estabelecimento?.bairro)

    const estado = estabelecimento?.estado
    $('select#estado option[value="' + estado?.sigla + '"]').prop('selected', true)
    console.log('estabelecimento', estabelecimento)
}

/* Populated fields by Zipcode */
function loadFieldsByZipcode(data) {
    $('#endereco').val(data?.logradouro + ', ' + data?.bairro)
    $('#endereco-boleto').val(data?.logradouro)
    $('#bairro').val(data?.bairro)
    $('#bairro-boleto').val(data?.bairro)
    $('#cidade').val(data?.localidade)
    $('#complemento').val(data?.complemento)
    $('select#estado option[value="' + data?.uf + '"]').prop('selected', true)
}

/* Toast Bootstrap 4 */

function toastNotification(title, iconToast, text) {
    $.toast({ 
        text : text, 
        showHideTransition : 'slide',  // It can be plain, fade or slide
        icon: iconToast,
        heading: title,    
        //bgColor : 'blue', // Background color for toast
        //textColor : '#eee',            // text color
        // allowToastClose : false,       // Show the close button or not
        hideAfter : 5000,              // `false` to make it sticky or time in miliseconds to hide after
        stack : 5,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
        textAlign : 'left',            // Alignment of text i.e. left, right, center
        position : 'top-right'       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
      })
}

/* Check lenght categories checkbox */

function checkCategoriesLength() {
    const checkGroup = $('.check-group')
    const checkGroupItem = checkGroup.find('.check-item input:checked')

    if (checkGroupItem.length >= 3)
        toastNotification('Aviso', 'error', 'Máximo de 3 categorias')

    return checkGroupItem.length
}

/* Payments Credit Card */

function validateCreditCard() {
    const cardHolder = $('input[name=cardHolder]').val()
    const cardNumber = $('input[name=cardNumber]').val()
    const installments = $('input[name=installments]').val()
    const installmentValue = $('input[name=installmentValue]').val()
    const dueDate = $('input[name=dueDate]').val()
    const cvv = $('input[name=cvv]').val()

    const fields = ['cardHolder', 'cardNumber', 'installments', 'dueDate', 'cvv']

    if (installmentValue === undefined || installmentValue == 0) {
        toastNotification('Atenção', 'error', 'Número de cartão inválido, verifique e tente novamente!')
        return false
    }

    if (cardHolder == '' || cardNumber == '' || installments == '' || installments == 'null' || dueDate == '' || cvv == '') {
        toastNotification('Atenção', 'error', 'Preencha todos os campos do cartão para prosseguir!')
        return false
    }

    return true

}


/* PAYMENT CREDIT CARD */
function paymentCreditCard() {

    const cardHolder = $('input[name=cardHolder]').val()
    const cardNumber = $('input[name=cardNumber]').val().replace(/[^\d]+/g,'')
    const installments = $('select[name=installments]').val()
    const installmentValue = $('input[name=installmentValue]').val()
    let dueDate = $('input[name=dueDate]').val()
    const cvv = $('input[name=cvv]').val()

    dueDate = dueDate.split('/')

    if (cardNumber.length >= 16) {

        const param = {
            cardNumber,
            brand: $("input[name='brand']").val(),
            cvv,
            expirationMonth: dueDate[0],
            expirationYear: dueDate[1],
            success: function(json){
                var token = json.card.token;
                $("input[name='token']").val(token);                

                var senderHash = PagSeguroDirectPayment.getSenderHash();
                $("input[name='senderHash']").val(senderHash);

                const fields = {
                    publicKey: PUBLIC_KEY_PAGSEGURO,
                    "holder" : cardHolder,
                    "number": cardNumber,
                    "expMonth": dueDate[0],
                    "expYear": dueDate[1], 
                    "securityCode": cvv
                }

                const cardToken = PagSeguro.encryptCard(fields);

                const data = { "token": token, "senderHash": senderHash, "cardToken": cardToken, "amount": AMOUNT, "installmentValue": installmentValue, "installments": installments, "type": 'CARTAO' }
                
                sendPaymentAjax(data)
            }, error: function(json){
                console.log('error paymentCreditCard', json.errors);
                for (const key in json?.errors) {
                    toastNotification('Erro ao pagar (Cod '+key+')', 'error', 'Não foi possível realizar o pagamento. Motivo "'+json?.errors[key]+'"')                    
                }
                
            }, complete:function(json){
            }
        }

        PagSeguroDirectPayment.createCardToken(param)
    }
}

/* PAYMENT BANK_SLIP - BOLETO */
function paymentBankSlip() {
    const fields = ['nome', 'email', 'cpf', 'cep', 'endereco', 'numero', 'bairro', 'cidade', 'estado']
    const form = $('#form-boleto')

    const name = form.find("input[name='nome']").val()
    const tax_id = form.find("input[name='cpf']").val()
    const email = form.find("input[name='email']").val()

    const regionCode = form.find("select[name='estado']").val()
    const city = form.find("input[name='cidade']").val()
    const postal_code = form.find("input[name='cep']").val()
    const street = form.find("input[name='endereco']").val()
    const number = form.find("input[name='numero']").val()
    const locality = form.find("input[name='bairro']").val()

    if (name == '' || tax_id == '' || email == '' || regionCode == '' || city == '' || postal_code == '' || street == '' || number == '' || locality == '' ) {
        toastNotification('Atenção', 'error', 'Preencha todos os campos do boleto para prosseguir!')
        return false
    }

    const data = { "name": name, "tax_id": tax_id, "email": email, "regionCode": regionCode, "city": city, "postal_code": postal_code, "street": street, "number": number,"locality": locality, "type": 'BOLETO' }

    sendPaymentAjax(data,'Boleto')
}

/* GET INSTALLMENTS CREDIT CARD */
function getInstallments(){
            
    const cardNumber = $("input[name='cardNumber']").val();

    //if creditcard number is finished, get installments
    if(cardNumber.length != 19){
        return;
    } 

    $(LOADING_INSTALLMENTS).show()
    
    PagSeguroDirectPayment.getBrand({
        cardBin: cardNumber.replace(/ /g,''),
        success: function(json){
            var brand = json.brand.name;
            $("input[name='brand']").val(brand);
            
            // var amount = parseFloat($("input[name='amount']").val());
            var shippingCoast = parseFloat($("input[name='shippingCoast']").val());
            
            //The maximum installment qty with no extra fees (You must configure it on your PagSeguro dashboard with same value)
            var max_installment_no_extra_fees = 2;

            PagSeguroDirectPayment.getInstallments({
                amount: AMOUNT,
                brand: brand,
                maxInstallmentNoInterest: max_installment_no_extra_fees,
                success: function(response) {
                    
                    /*
                        Available installments options.
                        Here you have quantity and value options
                    */
                    $(LOADING_INSTALLMENTS).hide()
                    console.log('success getInstallments', response);
                    installments = response.installments[brand];
                    $("#select-installments").html("");
                    for(var installment of installments){
                        $("#select-installments").append("<option value='" + installment.quantity + "'>" + installment.quantity + " x R$ " + installment.installmentAmount + " - " + (installment.quantity <= max_installment_no_extra_fees? "Sem" : "Com")  + " Juros</option>");
                    }

                    $('input[name=installmentValue]').val(AMOUNT)

                }, error: function(response) {
                    console.log('error getInstallments', response);
                    $('input[name=installmentValue]').val('0')
                }, complete: function(response) {
                    //Called after sucess or error
                    $(LOADING_INSTALLMENTS).hide()
                } 
            });
        }, error: function(json){
            console.log('error getBrand', json);
            $('input[name=installmentValue]').val('0')
        }, complete: function(json){
            $(LOADING_INSTALLMENTS).hide()
        }
    });
}

/* SET VALUE INSTALLMENTS */

function setValueInstallments(installments,thiss) {
    $("input[name='installmentValue']").val(installments[$(thiss).val()-1].installmentAmount);
}

/* SEND PAYMENTS AJAX */

function sendPaymentAjax(data, type = 'Cartão') {
    console.log('Data', data)

    const btnConfirmPayment = $('#payment-confirm')
    const loader = $('#loader-confirm-payment')

    if (type === 'Cartão') {

        $.ajax({
            url: "./pagseguro/payment-curl.php", 
            type: "POST",
            method: "post",
            dataType: "json",
            data,
            beforeSend: function() {
                $(btnConfirmPayment).attr('disabled', true)
                $(loader).show()
            }
        }).done((data) => {
            console.log('done', data)
            const length = Object.keys(data).length

            if (length > 0) {
                //verifica se o pagseguro retornou erro
                if (data?.error_messages && data?.error_messages.length > 0) {
                    const msg = data.error_messages
                    return toastNotification('Erro ao processar pagamento | Cod ' + msg[0].code, 'error', msg[0].message)
                }
                //fim | verifica se o pagseguro retornou erro

                //se deu sucesso
                if (data.status === 'AUTHORIZED' || data.status === 'PAID') {
                    $('#payment-form')[0].reset()
                    return toastNotification('Status Pagamento: '+ data?.payment_response?.message + '', 'success', 'O pagamento foi realizado com sucesso!')
                }

                if (data?.message === 'Unauthorized') {
                    return toastNotification('Aviso', 'error', 'Pagamento não autorizado! Contate o administrador do Sistema.')
                }

                return toastNotification('Status Pagamento: Não identificado', 'warning', 'Contate o adminsitrador do Sistema.')
            } else {
                toastNotification('Aviso', 'error', 'Erro Interno ao realizar pagamento, contate o administrador do site!')
            }
        }).fail((data) => {
            console.log('fail', data)
            toastNotification('Aviso', 'error', 'Erro Interno ao realizar pagamento, contate o administrador do site!')
        })
        .always((data) => {
            console.log( "finished" );
            $(btnConfirmPayment).attr('disabled', false)
            $(loader).hide()
        });

    } else if (type === 'Boleto') {
        
        $.ajax({
            url: "./pagseguro/payment-curl.php", 
            type: "POST",
            method: "post",
            dataType: "json",
            data,
            beforeSend: function() {
                $(btnConfirmPayment).attr('disabled', true)
                $(loader).show()
            }
        }).done((data) => {
            console.log('done boleto', data)
            const length = Object.keys(data).length

            if (length > 0) {

                if (data?.status == 'failed') {
                    return toastNotification('Erro ao gerar boleto', 'error', data?.responseText)
                }
                
                const response = JSON.parse(data)
               
                //verifica se o pagseguro retornou erro
                if (response?.error_messages && response?.error_messages.length > 0) {
                    const msg = response.error_messages
                    return toastNotification('Erro ao processar pagamento | Cod ' + msg[0].code, 'error', msg[0].message)
                }
                //fim | verifica se o pagseguro retornou erro

                 //se deu sucesso
                if (response.status === 'AUTHORIZED' || response.status === 'WAITING') {
                    $('#form-boleto')[0].reset()
                    return toastNotification('Status Pagamento: '+ response?.payment_response?.message + '', 'success', 'O boleto foi gerado com sucesso! Confira em seu e-mail!')
                }

                if (response?.message === 'Unauthorized') {
                    return toastNotification('Aviso', 'error', 'Pagamento não autorizado! Contate o administrador do Sistema.')
                }

            } else {
                toastNotification('Aviso', 'error', 'Erro Interno ao gerar o boleto, contate o administrador do site!')
            }
        }).fail((data) => {
            console.log('fail', data)
            toastNotification('Aviso', 'error', 'Erro Interno ao gerar o boleto, contate o administrador do site!')
        })
        .always((data) => {
            console.log( "finished boleto" );
            $(btnConfirmPayment).attr('disabled', false)
            $(loader).hide()
        });
    }
}