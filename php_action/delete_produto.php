<?php
//Sesão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    $codpro = trim(mysqli_escape_string($connect, $_POST['codpro']));

    $sql = " DELETE FROM tproduto WHERE CodPro = '$codpro' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../produtos.php?Sucesso!');
    else:
        header('Location: ../produtos.php?Erro!');
        $_SESSION['mensagem'] = "Erro ao deletar!";
    endif;
endif;
?>