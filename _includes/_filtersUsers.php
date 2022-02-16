<div class="filtersTable mb-3">
    <span class="expandFilter color-blue-dark fw-600 d-inline-block d-md-none cursor-pointer mb-3"><span>Exibir Filtros</span> <i class="bi bi-funnel ml-2"></i></span>
    <div class="d-none d-md-flex flex-wrap justify-content-start align-items-center content">
        <div class="item">
            <form>
                <div class="form-group">
                    <label>FILTRAR POR REGIÃO (UF):</label>
                    <div class="d-flex">
                        <select name="regiao_uf" class="form-control">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                        <button class="btn bg-black color-white ml-3">OK</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="item">
            <form>
                <div class="form-group">
                    <label>CATEGORIAS DE PROJETOS ENVIADOS:</label>
                    <div class="d-flex">
                        <select name="categorias_enviados" class="form-control">
                            <option>Cancelados</option>
                            <option selected>Confirmados</option>
                            <option>Pendente</option>
                        </select>

                        <button class="btn bg-black color-white ml-3">OK</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="item">
            <form>
                <div class="form-group">
                    <label>BUSCAR POR CNPJ:</label>
                    <div class="d-flex">
                        <input name="cnpj" class="form-control mask-cnpj">
                        <button class="btn bg-black color-white ml-3">OK</button>
                    </div>
                </div>
            </form>
        </div>

       <div class="item d-flex align-items-center">
           <form action="">
                <div class="form-group">
                    <label class="d-none d-md-block visibility-hidden">BAIXAR TABELA</label>
                    <button class="btn bg-gradient-primary border-none py-2 color-white ml-0 fs-164">
                        <i class="bi bi-file-earmark-arrow-down"></i>
                        BAIXAR TABELA
                    </button>
                </div>
           </form>
       </div>
    </div>
</div>