<div class="filtersTable mb-3">
    <span class="expandFilter color-blue-dark fw-600 d-inline-block d-md-none cursor-pointer mb-3"><span>Exibir Filtros</span> <i class="bi bi-funnel ml-2"></i></span>
    <div class="d-none d-md-flex flex-wrap justify-content-start align-items-center content">
        <div class="item">
            <form>
                <div class="form-group">
                    <label>STATUS DO PROJETO</label>
                    <div class="d-flex">
                        <select name="status_projeto" class="form-control">
                            <option>Cancelado</option>
                            <option>Finalizado</option>
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
                    <label>STATUS DE PAGAMENTO</label>
                    <div class="d-flex">
                        <select name="status_projeto" class="form-control">
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
                    <label>STATUS DE AVALIAÇÃO</label>
                    <div class="d-flex">
                        <select name="status_projeto" class="form-control">
                            <option>Avaliados</option>
                            <option>Não avaliados</option>
                        </select>

                        <button class="btn bg-black color-white ml-3">OK</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="item">
            <form>
                <div class="form-group">
                    <label>FILTRAR POR PERÍODO</label>
                    <div class="d-flex">
                        <input type="text" name="filtrar_periodo_inicio" class="form-control mr-2 mask-date" placeholder="Data Início"/>
                        <input type="text" name="filtrar_periodo_fim" class="form-control mask-date" placeholder="Data Final"/>
                            
                        <button class="btn bg-black color-white ml-3">OK</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>