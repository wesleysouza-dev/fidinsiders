$(function(){
    /* Mobile navigation */
    const btnMobile = $('#navbar-button-mobile')
    const listNavMob = $('#list-nav-main-mobile')
    btnMobile.click(() => {
        listNavMob.toggleClass('openNav')
    })

    $('.toast').toast('show')

    /* Mask inputs */
    $(".mask-date").mask("99/99/9999")
    $(".mask-cnpj").mask("99.999.999/9999-99")
    $(".mask-cep, .mask-zipcode").mask("9999-999")
    $(".mask-phone").mask("(99) 9999-9999?9")
    .focusout(function (event) {  
        let target, phone, element;  
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
        phone = target.value.replace(/\D/g, '');
        element = $(target);  
        element.unmask();  
        if(phone.length > 10) {  
            element.mask("(99) 99999-999?9");  
        } else {  
            element.mask("(99) 9999-9999?9");  
        }  
    });

    /* Call CNPJ populate fields */
    $('.cnpj-dynamic').blur((e) => {
        const cnpj = e.target.value.replace(/[^\w]/g, '')
        if (cnpj.length === 14)
            getCNPJ(cnpj)
        console.log('cnpj', cnpj.length)
            
    })
})