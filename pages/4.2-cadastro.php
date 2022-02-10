<main class="bg-body-2-images py-5 bg-white d-flex align-items-center">
    <div class="container">
        <?php 
        $stepCurrent = 2;
        $stepCurrentText = 'Informações sobre o projeto';
        require('_includes/_stepsButtons.php'); 
        ?>

        <form action="4.2-cadastro.php" id="form-register" class="px-2 py-5 form-register form-default">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Qual o nome do projeto?*</label>
                        <input type="text" class="form-control" name="nome_projeto" required>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Empresa beneficiada (Se aplicável):</label>
                        <input type="text" class="form-control" name="empresa_beneficiada">
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="form-group">
                        <label>Empresa responsável pelo desenvolvimento do projeto (opcional):</label>
                        <input type="text" class="form-control" name="empresa_responsavel">
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="form-group">
                        <label>Data do lançamento:*</label>
                        <input type="text" class="form-control mask-date" name="data_lancamento" required>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label>Categorias:*</label>
                        <p>Selecione abaixo as categorias do seu projeto (até 3 categorias):</p>
                    </div>

                    <div class="check-group">
                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>INOVAÇÃO EM PLATAFORMA DE GESTÃO FINANCEIRA</label>
                                <p>Será premiada a solução inovadora que t enha melhorado efetivamente as finanças pessoais de seus usuários, com alguma medida que comprove esse impacto.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>SOLUÇÃO DE SEGUROS DE NICHO</label>
                                <p>O júri elegerá a melhor solução de seguros com foco em nichos ou segmentos específicos de consumidores, utilizando tecnologias diversas, como telemetria, IoT, IA entre outras.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>INOVAÇÃO EM PLATAFORMAS DE INVESTIMENTOS</label>
                                <p>O prêmio reconhecerá a iniciativa mais inovadora de plataforma com foco na democratização do acesso a investimentos por pessoas físicas (investidor de varejo).</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>INOVAÇÃO EM PLATAFORMAS DE CRÉDITO PARA PEQUENOS NEGÓCIOS</label>
                                <p>O prêmio será entregue para a iniciativa mais inovadora de plataforma que busca democratizar a oferta de crédito para pequenos negócios e microempreendedores.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>JORNADA DO CLIENTE EM MARKETPLACES FINANCEIROS</label>
                                <p>Será premiado o marketplace financeiro que ofereça a melhor experiência de uso durante a jornada do cliente, desde o onboarding até a efetiva contratação de produtos e serviços.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>SOLUÇÃO DE PAGAMENTOS PARA E-COMMERCE</label>
                                <p>O júri selecionará a solução mais inovadora de pagamentos no e-commerce, com a melhor experiência para consumidores e clientes varejistas.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>INOVAÇÃO NA OFERTA DE SOLUÇÕES FINANCEIRAS PARA O BEM ESTAR DE COLABORADORES</label>
                                <p>Essa categoria reconhece a solução financeira mais inovadora como parte de benefício corporativo para funcionários de empresas privadas, cujo objetivo seja melhorar o bem-estar financeiro desses colaboradores.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>PROGRAMA DE FIDELIZAÇÃO DE CLIENTES DE SERVIÇOS FINANCEIROS</label>
                                <p>O prêmio será entregue para a iniciativa mais exitosa na retenção de clientes através de programas de benefícios e recompensas.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>SOLUÇÃO DE CONSÓRCIO DIGITAL</label>
                                <p>Receberá o prêmio a solução que ofereça a melhor experiência de consumo de consórcio para pessoas físicas em plataformas digitais.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>INOVAÇÃO NA OFERTA DE SOLUÇÕES FINANCEIRAS PARA O PEQUENO E MÉDIO PRODUTOR RURAL</label>
                                <p>O júri selecionará a solução mais inovadora de oferta de crédito e outros produtos financeiros para empoderar pequenos e médios produtores rurais.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>INOVAÇÃO EM SOLUÇÕES DE CÂMBIO</label>
                                <p>Será premiada a solução mais inovadora para melhorar a experiência de pessoas físicas e pequenas empresas que precisam transacionar valores entre diferentes países, por meio de comércio exterior, remessas internacionais, pagamentos cross-border, entre outras operações.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>EXPERIÊNCIA DE VERIFICAÇÃO E AUTENTICAÇÃO DIGITAL DE IDENTIDADE</label>
                                <p>O júri premiará a melhor solução de identidade digital para verificação e autenticação em plataformas de instituições financeiras, desde o onboarding até a contratação de produtos.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>INOVAÇÃO NA RENEGOCIAÇÃO DE DÍVIDAS</label>
                                <p>Receberá o prêmio a solução reconhecida pelo júri como a solução mais inovadora para que pessoas e empresas possam renegociar suas dívidas.</p>
                            </div>
                        </div>

                        <div class="check-item d-flex">
                            <input type="checkbox" class="form-control" name="categorias[]" required>
                            <div class="label-group">
                                <label>SOLUÇÕES FINANCEIRAS PARA FOMENTO DA DIVERSIDADE E INCLUSÃO </label>
                                <p>A iniciativa vencedora dessa categoria será reconhecida como a melhor e mais impactante iniciativa para atender diferentes nichos sociais e democratizar as finanças digitais.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php require('_includes/_buttonsRegister.php'); ?>
               
            </div>
        </form>

    </div>
</main>
