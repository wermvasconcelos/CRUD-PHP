<?php
//conxexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//mensagem
include_once 'includes/mensagem.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Produtos</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Descrição:</th>
                    <th>Marca:</th>
                    <th>Modelo:</th>
                    <th>Valor:</th>
                    <th>Estoque:</th>
                </tr>
            </thead>
        
            <tbody>
                <?php
                    $sql = " SELECT * FROM tproduto";
                    $resultado = mysqli_query($connect, $sql);

                    if(mysqli_num_rows($resultado) > 0):

                    while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['Descricao']; ?></td>
                    <td><?php echo $dados['Marca']; ?></td>
                    <td><?php echo $dados['Modelo']; ?></td>
                    <td><?php echo $dados['Valor']; ?></td>
                    <td><?php echo $dados['Estoque']; ?></td>
                    <td>
                        <a href="editar_produto.php?CodPro=<?php echo $dados['CodPro']; ?>" class="btn-floating blue">
                            <i class="material-icons">
                                edit
                            </i>
                        </a>
                    </td>
                    <td>

                        <a href="#modal<?php echo $dados['CodPro']; ?>" class="btn-floating red modal-trigger">
                            <i class="material-icons">
                                delete
                            </i>
                        </a>

                        <!-- Modal Structure -->
                            <div id="modal<?php echo $dados['CodPro']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Atenção!</h4>
                                    <p>Confirmar exclusão do vendedor?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="php_action/delete_produto.php" method="POST">
                                        <input type = "hidden" name="codpro" value="<?php echo $dados['CodPro']; ?>">
                                        <button type="submit" name="btn-deletar" class="btn blue">Sim</button>
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                    </form>
                                </div>
                            </div>
                    </td>
                </tr>
                    <?php
                        endwhile;
                    else: ?>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    <?php
                    endif;
                    ?>
            </tbody>
        </table>
        <br>
        <a href = "adicionar_produto.php" class = "btn">Adicionar</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>