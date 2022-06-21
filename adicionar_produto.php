<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Produto</h3>
        <form action="php_action/create_produto.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="descricao" id="descricao">
                <label for="descricao">Descrição</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="marca" id="marca">
                <label for="marca">Marca</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="modelo" id="modelo">
                <label for="modelo">Modelo</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="valor" id="valor">
                <label for="valor">Valor</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="estoque" id="estoque">
                <label for="estoque">Estoque</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="produtos.php" class="btn green">Lista de Produtos</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>