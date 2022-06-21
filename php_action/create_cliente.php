<?php
//Sesão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $estado = mysqli_escape_string($connect, $_POST['estado']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);

    $sql = " INSERT INTO tcliente (NomeCli, Endereco, Cidade, Estado, CEP, Telefone, CPF) VALUES ('$nome', '$endereco', '$cidade', '$estado', '$cep', '$telefone', '$cpf') ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../clientes.php?Sucesso!');
    else:
        header('Location: ../clientes.php?Erro!');
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
    endif;
endif;
?>