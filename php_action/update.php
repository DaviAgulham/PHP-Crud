<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    
    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = 'idade' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
    	$_SESSION['mensagem'] = "Cadastrado com sucesso";
    	header('Location: index.php');
    else:
    	$_SESSION['mensagem'] = "Não foi possivel cadastar";
        header('Location: index.php');
    endif;    	

 endif;   