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
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Endereço:</th>
                    <th>Cidade:</th>
                    <th>Estado:</th>
                    <th>CEP:</th>
                    <th>Telefone:</th>
                    <th>CPF:</th>
                </tr>
            </thead>
        
            <tbody>
                <?php
                    $sql = " SELECT * FROM tcliente";
                    $resultado = mysqli_query($connect, $sql);

                    if(mysqli_num_rows($resultado) > 0):

                    while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['NomeCli']; ?></td>
                    <td><?php echo $dados['Endereco']; ?></td>
                    <td><?php echo $dados['Cidade']; ?></td>
                    <td><?php echo $dados['Estado']; ?></td>
                    <td><?php echo $dados['CEP']; ?></td>
                    <td><?php echo $dados['Telefone']; ?></td>
                    <td><?php echo $dados['CPF']; ?></td>
                    <td>
                        <a href="editar_cliente.php?NumCli=<?php echo $dados['NumCli']; ?>" class="btn-floating blue">
                            <i class="material-icons">
                                edit
                            </i>
                        </a>
                    </td>
                    <td>

                        <a href="#modal<?php echo $dados['NumCli']; ?>" class="btn-floating red modal-trigger">
                            <i class="material-icons">
                                delete
                            </i>
                        </a>

                        <!-- Modal Structure -->
                            <div id="modal<?php echo $dados['NumCli']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Atenção!</h4>
                                    <p>Confirmar exclusão do cliente?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="php_action/delete_cliente.php" method="POST">
                                        <input type = "hidden" name="numcli" value="<?php echo $dados['NumCli']; ?>">
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
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    <?php
                    endif;
                    ?>
            </tbody>
        </table>
        <br>
        <a href = "adicionar_cliente.php" class = "btn">Adicionar</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>