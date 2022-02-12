<div class="container p-5">
    <h1>#Lista das Páginas</h1>
    <br><br>

    <h4 class="mb-3">Conta</h4>
    <div class="list-group mb-4">
        <a href="2-login" class="list-group-item list-group-item-action">Login</a>
        <a href="3-recuperacao-de-conta" class="list-group-item list-group-item-action">Recuperação de Senha</a>
        <a href="3.a-recuperacao-de-conta " class="list-group-item list-group-item-action">Recuperação de Senha 2 </a>
    </div>

    <h4 class="mb-3">Cadastro</h4>
    <div class="list-group mb-4">
        <?php for ($i=1; $i <= 6 ; $i++) { ?>
        <a href="4.<?=$i;?>-cadastro" class="list-group-item list-group-item-action">Cadastro - Passo <?= $i; ?></a>
        <?php } ?>
        <a href="4.6-cadastro-pagamento" class="list-group-item list-group-item-action">Pagamento</a>
        <a href="4.6-cadastro-pagamento-ok" class="list-group-item list-group-item-action">Pagamento Confirmado</a>
    </div>

    <h4 class="mb-3">Painel</h4>
    <div class="list-group mb-4">
        <a href="16-resumo" class="list-group-item list-group-item-action">Resumo</a>
        <a href="17-historico-de-edicoes" class="list-group-item list-group-item-action">Histórico de Edições</a>
        <a href="18-detalhes-projeto-pendente" class="list-group-item list-group-item-action">Detalhes Projeto Pendente</a>
        <a href="19-detalhes-projeto-confirmado" class="list-group-item list-group-item-action">Detalhes Projeto Confirmado</a>
        <a href="20-visualizar-projetos" class="list-group-item list-group-item-action">Visualizar Projetos</a>
        <a href="20.a-visualizar-projetos-sem-jurados" class="list-group-item list-group-item-action">Definir jurados</a>
        <a href="20.c-gerenciar-jurados" class="list-group-item list-group-item-action">Gerenciar jurados</a>
    </div>

</div>




