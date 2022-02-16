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

    $(document).on('focus', '.mask-cnpj', function(){
        $(this).mask('99.999.999/9999-99')
    })

    $(document).on('focus', '.mask-cep, .mask-zipcode', function(){
        $(this).mask("99999-999")
    })
   
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
    $(document).on('blur', '.cnpj-dynamic', ((e) => {
        const cnpj = e.target.value.replace(/[^\w]/g, '')
        if (cnpj.length === 14)
            getCNPJ(cnpj)
    }))

    /* Call Zipcode fields */
    $(document).on('blur', 'input#cep', ((e) => {
        const zipcode = e.target.value.replace(/[^\w]/g, '')
        if (zipcode.length === 8)
            getZipcode(zipcode)
    }))

    /* Validate Categories checkbox */
    const checkGroupItem = $('.check-group .check-item')

    checkGroupItem.click(function() {

        const checkbox = $(this).find('input[type=checkbox]')
        const thiss = $(this)
        
        if (checkbox.is(':checked')) {
            $(this).removeClass('active')
            checkbox.prop('checked', false)
        } else {
            $.when(checkCategoriesLength()).done( function(res) {
                if (res < 3) {
                    checkbox.prop('checked', true)
                    $(thiss).addClass('active')
                }
            })
        }
    })
    
    /* Insert data by company nf */

    const selectRespNF = $('#responsavel_nf')
    const elPopulateNF = $('#other-person-nf')

    const dataCompanyNF = `
        <div class="col-12">
            <div class="form-group">
                <label>Informe os dados do responsável pelo pagamento:</label>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label>CNPJ:*</label>
                <input type="text" class="form-control mask-cnpj cnpj-dynamic" name="responsavel_cnpj" required>
            </div>
        </div>
        
        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label>Razão Social:*</label>
                <input type="text" class="form-control" name="responsavel_razao-social" required id="razao_social">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Nome Fantasia:*</label>
                <input type="text" class="form-control" name="responsavel_nome-fantasia" required id="nome_fantasia">
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="form-group">
                <label>CEP:*</label>
                <input type="text" class="form-control mask-zipcode" name="responsavel_cep" required id="cep">
            </div>
        </div>

        <div class="col-12 col-lg-8">
            <div class="form-group">
                <label>Endereço:*</label>
                <input type="text" class="form-control" name="responsavel_endereco" required id="endereco">
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label>Estado (UF):*</label>
                <select class="form-control" name="responsavel_estado" required id="estado">
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

        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label>Cidade:*</label>
                <input type="text" class="form-control" name="responsavel_cidade" required id="cidade">
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="form-group">
                <label>Número:*</label>
                <input type="number" class="form-control" name="responsavel_número" required id="numero">
            </div>
        </div>

        <div class="col-12 col-lg-8">
            <div class="form-group">
                <label>Complemento:</label>
                <input type="text" class="form-control" name="responsavel_complemento" id="complemento">
            </div>
        </div>
    `
    selectRespNF.change( function(e) {
        if ($(this).val() === 'sim')
            return elPopulateNF.html(dataCompanyNF)
        return elPopulateNF.html('')
    })

    /* Add or Remove Participants inputs */

    const elParticipants =  $('#participants-project')
    const elItemParticipant = `
        <div class="row item-participant">
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="nome_participante[]" placeholder="Nome" required>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <input type="email" class="form-control" name="email_participante[]" placeholder="E-mail" required>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="cargo_participante[]" placeholder="Cargo" required>
                </div>
            </div>

            <div class="col-12 col-lg-1 d-flex align-items-center">
                <button type="button" class="btn-control-list btn-plus" data-type="add"><i class="bi bi-plus-circle text-success"></i></button>
                <button type="button" class="btn-control-list btn-minus" data-type="remove"><i class="bi bi-dash-circle text-danger"></i></button>
            </div>
        </div>
    `
    $(document).on('click', '.btn-control-list', function (e) {
        const type = $(this).attr('data-type')

        if (type === 'add') {
            elParticipants.append(elItemParticipant)
        } else {
            $(this).parent().parent().remove()
        }
    })

    /* Textarea limit character refresh numbers */
    
    const elLimit = $('.textarea-limit')
    const textAreaLimit = elLimit.find('textarea')

    textAreaLimit.on('keyup', function(e) {
        const qtd = $(this).val().length
        const qtdLimit = $(this).attr('maxlength')
        const result =  qtdLimit - qtd

        $(this).parent().find('.number-update').html(qtd)
    })

    /* Expand Filter in mobile */

    const expandFilter = $('.expandFilter')

    expandFilter.on('click', function() {
        const textFilter = $(this).find('span').text()
        const content = $(this).parent().find('.content')

        if (textFilter == 'Recolher Filtros') {
            $(this).find('span').text('Exibir Filtros')
            return content.removeClass('d-flex').addClass('d-none')
        }
        $(this).find('span').text('Recolher Filtros')
        return content.removeClass('d-none').addClass('d-flex')
    })

    /* Tooltip Bootstrap */
    $('[data-toggle="tooltip"]').tooltip()

    /* Checked input radio for Votes */

    const groupVoteItem = $('.group-vote .item')

    groupVoteItem.on('click', function() {
        $(this).find('input').prop('checked', true)
        $(groupVoteItem).removeClass('selected')
        $(this).addClass('selected')
    })

})