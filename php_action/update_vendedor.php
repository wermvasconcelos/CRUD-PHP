<?php
//Sesão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $codven = trim(mysqli_escape_string($connect, $_POST['codven']));
    $nome = trim(mysqli_escape_string($connect, $_POST['nome']));
    $telefone = trim(mysqli_escape_string($connect, $_POST['telefone']));

    $sql = " UPDATE tvendedor SET Nome ='$nome', Telefone ='$telefone' WHERE CodVen ='$codven' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../vendedores.php?Sucesso!');
    else:
        header('Location: ../vendedores.php?Erro!');
        $_SESSION['mensagem'] = "Erro ao atualizar!";
    endif;
endif;
?>