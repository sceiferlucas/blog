<?php
    include 'app/config.php';
    $recebe_email = $_POST['email'];
    $recebe_senha = $_POST['senha'];
    $recebe_nome = $_POST['nome'];

$consulta = $conn->query("SELECT email FROM usuarios WHERE email='$recebe_email'");

if ($consulta->rowCount()==1){
    header('location:erro1.php');
}else{
    try {

        $incluir = $conn->query("INSERT INTO usuarios (email, senha, nome, adm) VALUES ('$recebe_email', '$recebe_senha', '$recebe_nome','0')");

        header('location:ok.php');
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}