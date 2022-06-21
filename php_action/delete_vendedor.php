<?php
//Sesão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    $codven = trim(mysqli_escape_string($connect, $_POST['codven']));

    $sql = " DELETE FROM tvendedor WHERE CodVen = '$codven' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../vendedores.php?Sucesso!');
    else:
        header('Location: ../vendedores.php?Erro!');
        $_SESSION['mensagem'] = "Erro ao deletar!";
    endif;
endif;
?>