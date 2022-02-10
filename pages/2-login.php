<main class="bg-body-login py-5 bg-white d-flex align-items-center">
    <div class="container py-0 py-md-4 py-lg-5">
        <div class="row mb-lg-5 py-0 py-md-5">
            <div class="col-12 col-lg-5">
                <h1 class="title-h1">Já possui cadastro?</h1>
                <p>Efetue login inserindo suas credenciais de acesso.</p>

                <form class="form-login mt-4 pt-2">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Senha" required>
                    </div>

                    <div class="g-recaptcha mb-4" data-sitekey="inserir-a-key-da-api-aqui"></div>

                    <button type="submit" class="btn btn-default bg-black color-white border-black w-100 text-uppercase py-2">Entrar</button>

                    <p class="mt-3 fs-13">Esqueceu sua senha ou e-mail? <a href="3-recuperacao-de-conta" class="color-black text-underline">Recupere seu acesso agora.</a></p>
                </form>
            </div>

            <div class="col-12 col-lg-2 d-flex justify-content-center"><span class="divider-vertical-login"></span></div>

            <div class="col-12 col-lg-5 d-flex flex-wrap flex-column align-items-start justify-content-center mt-5 mt-lg-0">
                <h2 class="title-h1">Cadastre-se agora para enviar o seu projeto</h2>
                <p>Clique no botão abaixo para iniciar o cadastro do seu projeto:</p>

                <a href="#" class="btn btn-default bg-black color-white border-black text-uppercase py-2 px-5 d-inline-block mb-4">Cadastrar projeto</a>

                <p>Ao prosseguir com o cadastro de seu projeto, você confirma estar de acordo com o <a href="#" class="text-underline color-black">Regulamento do Prêmio.</a></p>
            </div>
        </div>
    </div>
</main>

<!-- scripts import -->
<?php $scriptFooter = "<script src='https://www.google.com/recaptcha/api.js'></script>"; ?>

