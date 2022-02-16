<ul class="list-style-none p-0 mt-4 pt-2 pb-3 list-steps-vote d-flex flex-wrap align-items-center justify-content-center text-center">
    <li class="d-flex align-items-center justify-content-center <?= $stepCurrent === 1 ? 'active' : ''; ?> <?= $stepCurrent >= 2 ? 'selected' : ''; ?>">
        <a href="46-inovacao">1. INOVAÇÃO</a>
    </li>
    <li class="d-flex align-items-center justify-content-center <?= $stepCurrent === 2 ? 'active' : ''; ?> <?= $stepCurrent >= 3 ? 'selected' : ''; ?>">
        <a href="46.2-solucao-de-problema">2. SOLUÇÃO DE<br>PROBLEMA</a>
    </li>
    <li class="d-flex align-items-center justify-content-center <?= $stepCurrent === 3 ? 'active' : ''; ?> <?= $stepCurrent >= 4 ? 'selected' : ''; ?>">
        <a href="46.3-bem-estar-financeiro">3. BEM-ESTAR<br>FINANCEIRO</a>
    </li>
    <li class="d-flex align-items-center justify-content-center <?= $stepCurrent === 4 ? 'active' : ''; ?> <?= $stepCurrent >= 5 ? 'selected' : ''; ?>">
        <a href="46.4-resultados">4. RESULTADOS</a>
    </li>
    <li class="d-flex align-items-center justify-content-center <?= $stepCurrent === 5 ? 'active' : ''; ?> <?= $stepCurrent >= 6 ? 'selected' : ''; ?>">
        <a href="46.5-atracao-retencao-de-cliente">5. ATRAÇÃO E<br>RETENÇÃO DE CLIENTE</a>
    </li>
    <li class="d-flex align-items-center justify-content-center back">
        <a href="45-lista-projetos-avaliados">VOLTAR <br>AO RESUMO</a>
    </li>
</ul>