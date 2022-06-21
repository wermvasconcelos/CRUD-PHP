<?php
//Sesão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);

    $sql = " INSERT INTO tvendedor (Nome, Telefone) VALUES ('$nome', '$telefone') ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../vendedores.php?Sucesso!');
    else:
        header('Location: ../vendedores.php?Erro!');
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
    endif;
endif;
?>