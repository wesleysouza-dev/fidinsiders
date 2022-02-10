/* GLOBALS VARIABLES */

var URL_CNPJ = 'https://publica.cnpj.ws/cnpj/'
var URL_CEP = 'https://viacep.com.br/ws/'


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
    $('#cidade').val(data?.localidade)
    $('#complemento').val(data?.complemento)
    $('select#estado option[value="' + data?.uf + '"]').prop('selected', true)
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

/* Check lenght categories checkbox */

function checkCategoriesLength() {
    const checkGroup = $('.check-group')
    const checkGroupItem = checkGroup.find('.check-item input:checked')

    if (checkGroupItem.length >= 3)
        toastNotification('Aviso', 'error', 'Máximo de 3 categorias')

    return checkGroupItem.length
}