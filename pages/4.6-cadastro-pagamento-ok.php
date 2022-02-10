<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">
        <?php 
        $stepCurrent = 6;
        $stepCurrentText = 'CONFIRMAÇÃO E PAGAMENTO';
        require('_includes/_stepsButtons.php'); 
        ?>
        <div class="row">
            <div class="col-12 mt-5">
               <p class="text-success fw-600">OBRIGADO!</p>
               <p>Seu pagamento foi confirmado e as informações foram encaminhadas para seu e-mail.</p>
            </div>

            <div class="col-12">
                <div class="buttons-group d-inline-block d-md-flex flex-wrap mt-4">
                    <button type="button" onclick="window.location.href='#'" class="btn bg-white border-black fs-24 fw-600 color-black w-100 py-3 my-2 px-5 ml-0 w-auto">MINHA CONTA</button>
                </div>
            </div>
        </div>
</main>
