<div class="col-12">
    <div class="buttons-group d-inline-block d-md-flex flex-wrap mt-4">
        <button type="submit" class="btn bg-black fs-22 fw-600 color-white w-100 py-3 my-2 px-5 w-auto"><?= $textButtonMain ?? 'CONTINUAR'; ?></button>

        <button type="button" class="btn bg-white border-black fs-22 fw-600 color-black w-100 py-3 my-2 px-5 ml-0 ml-md-4 w-auto" data-toggle="modal" data-target="#modalPause">FINALIZAR DEPOIS</button>
    </div>

    <p class="text-danger mt-4">Os campos marcados com * são de preenchimento obrigatório.</p>
</div>

<!-- MODAL PAUSE -->
<div class="modal fade" id="modalPause" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="max-width: 600px">
        <div class="modal-content">
            <div class="modal-header bg-black">
                <h5 class="modal-title text-uppercase color-white text-center w-100 fs-18">Você pode pausar a inscrição do seu projeto e finalizar o preenchimento das informações depois.</h5>
                <button type="button" class="close color-white color-white-hover" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="px-0 px-md-5 text-center">
                Para completar as informações mais tarde, basta efetuar login no site www.fidinsiders.com.br e continuar de onde parou.
                </p>
                <p class="text-center">Você tem até XX/XX/XXXX para completar a sua inscrição.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn bg-black color-white fs-16">COMPLETAR INSCRIÇÃO AGORA</button>
                <button type="button" class="btn border-1-black fs-16" data-dismiss="modal">CONTINUAR MAIS TARDE</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL PAUSE -->