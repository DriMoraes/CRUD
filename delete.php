<?php
//sessão
    session_start();
//conexão
    require_once 'db_connect.php';

    /*

    if(isset($_POST['btn-cadastrar'])):
        $nome=mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome=mysqli_escape_string($connect, $_POST['sobrenome']);
        $email=mysqli_escape_string($connect, $_POST['email']);
        $idade=mysqli_escape_string($connect, $_POST['idade']);
    */

    if(isset($_POST['btn-deletar'])):
      
        $id=mysqli_escape_string($connect, $_POST['id']);
    
        $sql="DELETE FROM clientes WHERE id = '$id'";

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Deletado com sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao deletar";
            header('Location: ../index.php');
        endif;
    endif;
?>