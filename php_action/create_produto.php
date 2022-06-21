<?php
//Sesão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $marca = mysqli_escape_string($connect, $_POST['marca']);
    $modelo = mysqli_escape_string($connect, $_POST['modelo']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $estoque = mysqli_escape_string($connect, $_POST['estoque']);

    $sql = " INSERT INTO tproduto (Descricao, Marca, Modelo, Valor, Estoque) VALUES ('$descricao', '$marca','$modelo','$valor','$estoque') ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../produtos.php?Sucesso!');
    else:
        header('Location: ../produtos.php?Erro!');
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
    endif;
endif;
?>