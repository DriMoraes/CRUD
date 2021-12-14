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

    if(isset($_POST['btn-editar'])):
        /*$nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email =$_POST['email'];
        $idade = $_POST['idade'];*/
        $nome=mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome=mysqli_escape_string($connect, $_POST['sobrenome']);  
        $email=mysqli_escape_string($connect, $_POST['email']);
        $idade=mysqli_escape_string($connect, $_POST['idade']);
        $id=mysqli_escape_string($connect, $_POST['id']);
    
        $sql="UPDATE clientes SET nome='$nome', sobrenome='$sobrenome', email='$email', idade='$idade'
        WHERE id='$id'";

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Atualizado com sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao atualizar";
            header('Location: ../index.php');
        endif;
    endif;
?>