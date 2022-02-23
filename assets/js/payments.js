/* Payment Form */

var installments = [];
    
$("input[name='cardNumber']").keyup(function(){
    if ($(this).val().replace(/[^\d]+/g,'').length === 16) {
        console.log('cardNumber Request')
        getInstallments();
    } else {
        $('#select-installments').html('<option value="null">Aguardando cartão...</option>')
    }
});

$("#select-installments").change(function(){
    setValueInstallments(installments,$(this))
    // console.log(installments[$(this).val()-1]);
    // $("input[name='installmentValue']").val(installments[$(this).val()-1].installmentAmount);
});

// const shippingCoast = parseFloat($("input[name='shippingCoast']").val());
// const amount = AMOUNT
// const amount = parseFloat($("input[name='amount']").val());
// $("input[name='installmentValue']").val(amount + shippingCoast);
$("input[name='installmentValue']").val(AMOUNT);

PagSeguroDirectPayment.setSessionId(SESSION_CODE);

PagSeguroDirectPayment.getPaymentMethods({
    success: function(json){

        console.log('getPaymentMethods', json);
        getInstallments();

    }, error: function(json){
        console.log(json);
        var erro = "";
        for(i in json.errors){
            erro = erro + json.errors[i];
        }
        
        alert(erro);
    }, complete: function(json){
    }
});

const paymentForm = $('#payment-form')
const paymentConfirm = $('#payment-confirm')

$(paymentConfirm).on('click', function() {
    const validate = validateCreditCard()

    if (validate) {
        paymentCreditCard()
    }
    // $(paymentForm).submit()
})