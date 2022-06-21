<?php
//conxexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//select
if(isset($_GET['CodVen'])):
    $CodVen = mysqli_escape_string($connect, $_GET['CodVen']);

    $sql = " SELECT * FROM tvendedor WHERE CodVen = '$CodVen' ";
    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar vendedor</h3>
        <form action="php_action/update_vendedor.php" method="POST">
            <input type = "hidden" name = "codven" value ="<?php echo $dados['CodVen']; ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value = " <?php echo $dados['Nome']; ?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone" value = " <?php echo $dados['Telefone']; ?>">
                <label for="ttelefone">Telefone</label>
            </div>
        
            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="vendedores.php" class="btn green">Lista de Vendedores</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>