<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">

        <!-- card panel -->
        <section class="card-panel">
            <header class="d-flex justify-content-md-between align-items-center flex-wrap">
                <h6 class="my-2 pr-3 pr-md-5">Criar Nova Edição</h6>
                <!-- NO CASO DE EDIÇÃO -->
                <!--<h6 class="my-2 pr-3 pr-md-5">revise as informações abaixo e confirme a criação de uma nova edição</h6>-->
                <!-- FIM NO CASO DE EDIÇÃO -->
            </header>

        </section>
        <!-- end card panel -->
       
        <form action="4.2-cadastro" id="form-register" class="px-2 form-register form-default">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label>Nome da Edição:*</label>
                        <input type="text" class="form-control" name="nome_edicao" required>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label>Ano da Edição:*</label>
                        <input type="number" class="form-control" name="ano-edicao" required>
                    </div>
                </div>

                <div class="col-12">
                    <label>Valores para Inscrição:*</label>

                    <div class="form-group row no-gutters border-1-black mb-3">
                        <label class="col-7 col-md-4 col-form-label bg-eee border-right-1-black px-2 pt-2">1º Projeto</label>
                        <div class="col-5 col-md-8">
                            <input type="email" class="form-control border-none" placeholder="R$">
                        </div>
                    </div>

                    <div class="form-group row no-gutters border-1-black mb-3">
                        <label class="col-7 col-md-4 col-form-label bg-eee border-right-1-black px-2 pt-2">2º ao 5º Projeto</label>
                        <div class="col-5 col-md-8">
                            <input type="email" class="form-control border-none" placeholder="R$">
                        </div>
                    </div>

                    <div class="form-group row no-gutters border-1-black">
                        <label class="col-7 col-md-4 col-form-label bg-eee border-right-1-black px-2 pt-2">A partir do 6º Projeto</label>
                        <div class="col-5 col-md-8">
                            <input type="email" class="form-control border-none" placeholder="R$">
                        </div>
                    </div>
                      

                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label>Data de Início:* <i class="bi bi-question-circle" data-toggle="tooltip" data-placement="top" title="A partir desta data é liberado o cadastro de novos projetos"></i></label>
                        <input type="date" class="form-control" name="data_inicio" required>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label>Data de Início:*</label>
                        <input type="date" class="form-control" name="data_limite_envio" required>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label>Data limite para avaliação:* <i class="bi bi-question-circle" data-toggle="tooltip" data-placement="top" title="Data Limite para avaliações dos Jurados"></i></label>
                        <input type="date" class="form-control" name="data_limite_jurados" required>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label>Data do Evento:* <i class="bi bi-question-circle" data-toggle="tooltip" data-placement="top" title="Novas edições só podem edições podem ser criadas após esta data"></i></label>
                        <input type="date" class="form-control" name="data_evento" required>
                    </div>
                </div>

                <!-- NO CASO DE EDIÇÃO -->
                <!--
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label>Data de Encerramento:* <i class="bi bi-question-circle" data-toggle="tooltip" data-placement="top" title="Novas edições só podem edições podem ser criadas após esta data"></i></label>
                        <input type="date" class="form-control" name="data_encerramento" required>
                    </div>
                </div>
                -->
                <!-- FIM NO CASO DE EDIÇÃO -->
            

                <div class="col-12">
                    <div class="buttons-group d-inline-block d-md-flex flex-wrap mt-4">
                        <button type="submit" class="btn bg-black fs-22 fw-600 color-white w-100 py-3 my-1 px-5 w-auto">CONFIRMAR</button>

                        <button type="submit" class="btn bg-white border-black fs-22 fw-600 color-black w-100 py-3 my-1 px-5 ml-0 ml-md-4 w-auto">CANCELAR</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</main>

<?php
    $scriptFooter = "<script>$(function(){toastNotification('Sucesso!!', 'success', 'A edição foi criada com êxito!')})</script>";
?>