<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo cliente</h3>
        <form action="php_action/create_cliente.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco">
                <label for="endereco">Endereço</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade">
                <label for="cidade">Cidade</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="estado" id="estado">
                <label for="estado">Estado</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cep" id="cep">
                <label for="cep">CEP</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">Telefone</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cpf" id="cpf">
                <label for="cpf">CPF</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="clientes.php" class="btn green">Lista de Cliente</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>