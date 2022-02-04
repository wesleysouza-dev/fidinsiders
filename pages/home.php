<div class="container p-5">
    <h1>#Lista das Páginas</h1>
    <br><br>

    <h4 class="mb-3">Conta</h4>
    <div class="list-group mb-4">
        <a href="#" class="list-group-item list-group-item-action">Login</a>
        <a href="#" class="list-group-item list-group-item-action">Recuperação de Senha</a>
        <a href="#" class="list-group-item list-group-item-action">Recuperação de Senha 2 </a>
    </div>


    <h4 class="mb-3">Cadastro</h4>
    <div class="list-group mb-4">
        <?php for ($i=1; $i <= 6 ; $i++) { ?>
        <a href="#" class="list-group-item list-group-item-action">Cadastro - Passo <?= $i; ?></a>
        <?php } ?>
        <a href="#" class="list-group-item list-group-item-action">Pagamento</a>
        <a href="#" class="list-group-item list-group-item-action">Pagamento Confirmado</a>
    </div>


</div>




