<main class="bg-body-login py-5 bg-white d-flex align-items-center">
    <div class="container">
        <div class="row mb-lg-5 py-0 py-md-5">
            <div class="col-12">
                <h1 class="title-h1">Recuperação de conta</h1>
                <p>Preencha abaixo o e-mail utilizado na criação da sua conta, será encaminhado um link para cadastro de uma nova senha:</p>

                <p class="text-success fw-500">Link de recuperação enviado com sucesso! Verifique a sua caixa de entrada.</p>
            </div>

            <div class="col-12 col-lg-4">

                

                <!-- form oculto -->            
                <form class="form-forget-password mt-0 pt-2 d-none d-lg-block visibility-hidden">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="E-mail" required>
                    </div>

                    <div class="g-recaptcha mb-4" data-sitekey="inserir-a-key-da-api-aqui"></div>

                    <button type="submit" class="btn btn-default bg-black color-white border-black w-100 text-uppercase py-2">Enviar</button>

                    <p class="mt-3">Caso encontre problemas para ecuperar o acesso a sua conta, por favor <a href="#" class="color-black text-underline"><b>fale conosco.</b></a></p>
                </form>
                <!-- form oculto -->
            </div>
        </div>
    </div>
</main>

<!-- scripts import -->
<?php $scriptFooter = "<script src='https://www.google.com/recaptcha/api.js'></script>"; ?>

