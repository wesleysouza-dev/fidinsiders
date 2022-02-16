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

    <h4 class="mb-3">Painel Adm</h4>
    <div class="list-group mb-4">
        <a href="16-resumo" class="list-group-item list-group-item-action">Resumo</a>
        <a href="17-historico-de-edicoes" class="list-group-item list-group-item-action">Histórico de Edições</a>
        <a href="18-detalhes-projeto-pendente" class="list-group-item list-group-item-action">Detalhes Projeto Pendente</a>
        <a href="19-detalhes-projeto-confirmado" class="list-group-item list-group-item-action">Detalhes Projeto Confirmado</a>
        <a href="20-visualizar-projetos" class="list-group-item list-group-item-action">Visualizar Projetos</a>
        <a href="20.a-visualizar-projetos-sem-jurados" class="list-group-item list-group-item-action">Definir jurados</a>
        <a href="20.c-gerenciar-jurados" class="list-group-item list-group-item-action">Gerenciar jurados</a>
        <a href="30-gestao-de-jurados" class="list-group-item list-group-item-action">Gestão de jurados</a>
        <a href="33-incluir-jurado" class="list-group-item list-group-item-action">Incluir Jurado</a>
        <a href="34-gestao-de-usuarios" class="list-group-item list-group-item-action">Gestão de Usuários</a>
        <a href="35-visualizar-projeto-enviado-por-usuario" class="list-group-item list-group-item-action">Visualizar projeto enviado por usuário</a>
        <a href="38-tipo-de-relatorios" class="list-group-item list-group-item-action">Visualizar Tipo de Relatórios</a>
        <a href="39-relatorios-de-projetos" class="list-group-item list-group-item-action">Relatórios de Projetos</a>
        <a href="40-relatorios-de-usuarios" class="list-group-item list-group-item-action">Relatórios de Usuários</a>
        <a href="41-painel-de-edicao" class="list-group-item list-group-item-action">Painel de Edição</a>
        <a href="42-nova-edicao" class="list-group-item list-group-item-action">Nova/Revisão Edição</a>
    </div>

    <h4 class="mb-3">Painel Jurados</h4>
    <div class="list-group mb-4">
        <a href="44-painel-de-controle-jurado" class="list-group-item list-group-item-action">Resumo - Painel de Controle</a>
        <a href="44.a-avaliacao-projeto" class="list-group-item list-group-item-action">Avaliação de Projeto</a>
        <a href="45-lista-projetos-avaliados" class="list-group-item list-group-item-action">Lista de Projetos Avaliados</a>
        <a href="46-inovacao" class="list-group-item list-group-item-action">Avaliação - Inovação</a>
        <a href="46.2-solucao-de-problema" class="list-group-item list-group-item-action">Avaliação - Solução de Problema</a>
        <a href="46.3-bem-estar-financeiro" class="list-group-item list-group-item-action">Avaliação - Bem-estar Financeiro</a>
        <a href="46.4-resultados" class="list-group-item list-group-item-action">Avaliação - Resultados</a>
        <a href="46.5-atracao-retencao-de-cliente" class="list-group-item list-group-item-action">Avaliação - Atração e Retenção de Cliente</a>
    </div>

</div>




