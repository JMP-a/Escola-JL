<div class="collapse mb-4" id="formCadastro">
    <div class="card card-body shadow-sm">
        <form action="acoes/cadastrar.php" method="post" class="row-3">
            <div class="col-md-3">
                <label class="for-label">
                    Tipo
                </label>
                <select name="tipo" class="form-select" required>
                    <option value="">Selecione</option>
                    <option value="">Carro</option>
                    <option value="">Moto</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">
                    Placa
                </label>
                <input type="text" name="placa" class="form-control" maxlength="8" required>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">
                    Modelo
                </label>
                <input type="text" name="modelo" class="form-control">
                </select>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-sucess w-100">
                    <i class="bi bi-check-circle"></i>
                    Salvar
                </button>
            </div>
        </form>
    </div>

</div>