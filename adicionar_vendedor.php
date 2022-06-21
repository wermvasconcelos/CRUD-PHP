<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo vendedor</h3>
        <form action="php_action/create_vendedor.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">Telefone</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="vendedores.php" class="btn green">Lista de Vendedores</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>