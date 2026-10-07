<?php

require 'includes/header.php';
require 'includes/mensagem.php';

?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>
        <i class="bi bi-car-front-fill"></i>
        Painel de Veículos
    </h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#formCadastro">
        <i class="bi bi-car-front-fill"></i>
        Novo veículo
    </button>
</div>

<?php

require 'includes/form-cadastro.php';

?>