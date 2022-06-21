<?php
//conxexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//select
if(isset($_GET['NumCli'])):
    $NumCli = mysqli_escape_string($connect, $_GET['NumCli']);

    $sql = " SELECT * FROM tcliente WHERE NumCli = '$NumCli' ";
    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar cliente</h3>
        <form action="php_action/update_cliente.php" method="POST">
            <input type = "hidden" name = "numcli" value ="<?php echo $dados['NumCli']; ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value = " <?php echo $dados['NomeCli']; ?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco" value = " <?php echo $dados['Endereco']; ?>">
                <label for="endereco">Endereço</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cidade" id="cidade" value = " <?php echo $dados['Cidade']; ?>">
                <label for="cidade">Cidade</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="estado" id="estado" value = " <?php echo $dados['Estado']; ?>">
                <label for="estado">Estado</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cep" id="cep" value = " <?php echo $dados['CEP']; ?>">
                <label for="cep">CEP</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone" value = " <?php echo $dados['Telefone']; ?>">
                <label for="telefone">Telefone</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cpf" id="cpf" value = " <?php echo $dados['CPF']; ?>">
                <label for="cpf">CPF</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="clientes.php" class="btn green">Lista de Clientes</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>