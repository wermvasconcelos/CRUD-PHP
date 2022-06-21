<?php
//Sesão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    $numcli = trim(mysqli_escape_string($connect, $_POST['numcli']));

    $sql = " DELETE FROM tcliente WHERE NumCli = '$numcli' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../clientes.php?Sucesso!');
    else:
        header('Location: ../clientes.php?Erro!');
        $_SESSION['mensagem'] = "Erro ao deletar!";
    endif;
endif;
?>