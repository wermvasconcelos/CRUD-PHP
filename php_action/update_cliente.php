<?php
//Sesão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $numcli = trim(mysqli_escape_string($connect, $_POST['numcli']));
    $nome = trim(mysqli_escape_string($connect, $_POST['nome']));
    $endereco = trim(mysqli_escape_string($connect, $_POST['endereco']));
    $cidade = trim(mysqli_escape_string($connect, $_POST['cidade']));
    $estado = trim(mysqli_escape_string($connect, $_POST['estado']));
    $cep = trim(mysqli_escape_string($connect, $_POST['cep']));
    $telefone = trim(mysqli_escape_string($connect, $_POST['telefone']));
    $cpf = trim(mysqli_escape_string($connect, $_POST['cpf']));

    $sql = " UPDATE tcliente SET NomeCli ='$nome', Endereco ='$endereco', Cidade ='$cidade', Estado ='$estado', CEP ='$cep', Telefone ='$telefone', CPF ='$cpf' WHERE NumCli ='$numcli' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../clientes.php?Sucesso!');
    else:
        header('Location: ../clientes.php?Erro!');
        $_SESSION['mensagem'] = "Erro ao atualizar!";
    endif;
endif;
?>