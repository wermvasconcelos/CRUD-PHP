<?php
//conxexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//select
if(isset($_GET['CodPro'])):
    $CodPro = mysqli_escape_string($connect, $_GET['CodPro']);

    $sql = " SELECT * FROM tproduto WHERE CodPro = '$CodPro' ";
    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar produto</h3>
        <form action="php_action/update_produto.php" method="POST">
            <input type = "hidden" name = "codpro" value ="<?php echo $dados['CodPro']; ?>">
            <div class="input-field col s12">
                <input type="text" name="descricao" id="descricao" value = " <?php echo $dados['Descricao']; ?>">
                <label for="descricao">Descricão</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="marca" id="marca" value = " <?php echo $dados['Marca']; ?>">
                <label for="marca">Marca</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="modelo" id="modelo" value = " <?php echo $dados['Modelo']; ?>">
                <label for="modelo">Modelo</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="valor" id="valor" value = " <?php echo $dados['Valor']; ?>">
                <label for="valor">Valor</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="estoque" id="estoque" value = " <?php echo $dados['Estoque']; ?>">
                <label for="Estoque"></label>
            </div>
        
            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="produtos.php" class="btn green">Lista de Produtos</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>