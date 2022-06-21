<?php
//Sesão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $codpro = trim(mysqli_escape_string($connect, $_POST['codpro']));
    $descricao = trim(mysqli_escape_string($connect, $_POST['descricao']));
    $marca = trim(mysqli_escape_string($connect, $_POST['marca']));
    $modelo = trim(mysqli_escape_string($connect, $_POST['modelo']));
    $valor = trim(mysqli_escape_string($connect, $_POST['valor']));
    $estoque = trim(mysqli_escape_string($connect, $_POST['estoque']));

    $sql = " UPDATE tproduto SET Descricao ='$descricao', Marca ='$marca', Modelo = '$modelo', Valor = '$valor', Estoque = '$estoque' WHERE CodPro ='$codpro' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../produtos.php?Sucesso!');
    else:
        header('Location: ../produtos.php?Erro!');
        $_SESSION['mensagem'] = "Erro ao atualizar!";
    endif;
endif;
?>