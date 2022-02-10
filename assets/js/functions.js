/* GLOBALS VARIABLES */

var URL_CNPJ = 'https://publica.cnpj.ws/cnpj/'


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
    $('input#endereco').val(estabelecimento?.tipo_logradouro + ' ' + estabelecimento?.logradouro)

    const estado = estabelecimento?.estado
    console.log('estado', )
    $('select#estado option[value="' + estado?.sigla + '"]').prop('selected', true)
    console.log('estabelecimento', estabelecimento)
}

/* Toast Bootstrap 4 */

function toastNotification(title, icon, text) {
    $.toast({ 
        text : text, 
        showHideTransition : 'slide',  // It can be plain, fade or slide
        icon: icon,
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