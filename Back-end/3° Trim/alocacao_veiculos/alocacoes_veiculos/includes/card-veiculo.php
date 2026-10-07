<div class="col-md-4 mb-4">

    <div class="card shadow-sm h-100">

        <div class="card-body">

            <div class="d-flex justify-content-between">

                <h5 class="card-title">

                    <i class="bi
                        <?= $v['tipo'] === 'carro'
                            ? 'bi-car-front-fill'
                            : 'bi-bicycle'
                        ?>">
                    </i>

                    <?= htmlspecialchars(
                        $v['modelo']
                    ) ?>

                </h5>


                <?php if (
                    $v['status'] === 'disponivel'
                ): ?>

                    <span class="badge bg-success">
                        Disponível
                    </span>

                <?php else: ?>

                    <span class="badge bg-warning text-dark">
                        Alocado
                    </span>

                <?php endif; ?>

            </div>


            <p class="card-text mb-1">

                <strong>Tipo:</strong>

                <?= ucfirst(
                    htmlspecialchars(
                        $v['tipo']
                    )
                ) ?>

            </p>


            <p class="card-text mb-3">

                <strong>Placa:</strong>

                <?= htmlspecialchars(
                    $v['placa']
                ) ?>

            </p>


            <div class="d-flex gap-2">


                <?php if (
                    $v['status'] === 'disponivel'
                ): ?>

                    <!-- ALOCAR -->

                    <a
                        href="paginas/alocar.php?id=<?= $v['id'] ?>"
                        class="btn btn-sm btn-primary"
                    >

                        <i class="bi bi-key"></i>

                        Alocar

                    </a>


                <?php else: ?>

                    <!-- DEVOLVER -->

                    <form
                        action="acoes/devolver.php"
                        method="POST"
                        onsubmit="return confirm(
                            'Confirmar devolução deste veículo?'
                        )"
                    >

                        <input
                            type="hidden"
                            name="id"
                            value="<?= $v['id'] ?>"
                        >


                        <button
                            type="submit"
                            class="btn btn-sm btn-warning"
                        >

                            <i class="bi bi-arrow-return-left"></i>

                            Devolver

                        </button>

                    </form>

                <?php endif; ?>


                <!-- EXCLUIR -->

                <form
                    action="acoes/excluir.php"
                    method="POST"
                    onsubmit="return confirm(
                        'Tem certeza que deseja excluir este veículo?'
                    )"
                >

                    <input
                        type="hidden"
                        name="id"
                        value="<?= $v['id'] ?>"
                    >


                    <button
                        type="submit"
                        class="btn btn-sm btn-outline-danger"
                    >

                        <i class="bi bi-trash"></i>

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>