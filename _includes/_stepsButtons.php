<div class="row">
    <div class="col-12 d-flex flex-wrap justify-content-center position-relative">
        <?php if (isset($detalhes) && $detalhes) : ?>
            <!-- exibe apenas no detalhes de projeto - Ex: página 18 e 19 -->
            <a href="#" class="btn btn-small bg-black color-white d-inline-block mb-4" data-toggle="modal" data-target="#modalDetalhesResumo">Ver resumo</a>
            <p class="w-100 text-center">Clique sobre os passos abaixo para conferir as informações enviadas pelo usuário:</p>
            <!-- fim exibe apenas no detalhes de projeto - Ex: página 18 e 19 -->
        <?php else : ?>
        <h6 class="ff-cond fs-20 text-uppercase fw-600">Cadastro de Novo Projeto</h6>
        <span class="mx-4">|</span>
        <h6 class="ff-cond fs-20 text-uppercase fw-600">Você está no passo:</h6>
        
        <div class="question-link-step">
            <p class="fs-13 fw-500">Em caso de qualquer <br>
            dúvida <a href="#" class="text-underline text-dark"><b>Fale Conosco</b></a></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <ul class="list-style-none p-0 mt-4 pt-2 pb-3 list-steps d-flex justify-content-center">
            <?php 
                for($i=1;$i<=6;$i++) : 
            ?>
            <li class="<?= ($i === $stepCurrent) ? 'active' : ''; ?> <?= ($i < $stepCurrent || $status === 'finalizado') ? 'actived' : ''; ?>">
                <a href="4.<?=$i;?>-cadastro" class="ff-cond d-flex justify-content-center align-items-center fs-26 fw-500 <?= ($status === 'pendente' && $i > $stepCurrent) ? 'bg-danger color-white color-white-hover' : 'text-dark'; ?>"><?=$i;?></a>
            </li>
            <?php endfor; ?>
        </ul>
        <div class="header-title-step text-center py-4 px-4 bg-black color-white ff-cond fs-26 text-uppercase fw-600 mt-4"><?= $stepCurrentText; ?></div>
    </div>
</div>