<?php

include 'app/config.php';
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y/m/d');

$recebe_titulo = $_POST['titulo'];
$recebe_descricao = $_POST['descricao'];
$recebe_artigo = $_POST['artigo'];


$recebe_imagem = $_FILES['tumb'];

$destino = "style/imagens/";


preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_imagem['name'],$extencao1);
$img_nome1 = md5(uniqid(time())).".".$extencao1[1];



    $inserir = "INSERT INTO postagens (titulo, data, imagem, descricao, texto) VALUES (:recebe_titulo, :data, :img_nome1, :recebe_descricao, :recebe_artigo)";

    try{
        $result = $conn->prepare($inserir);
        $result->bindParam(':recebe_titulo', $recebe_titulo, PDO::PARAM_STR);
        $result->bindParam(':data', $data, PDO::PARAM_STR);
        $result->bindParam(':img_nome1', $img_nome1, PDO::PARAM_STR);
        $result->bindParam(':recebe_descricao', $recebe_descricao, PDO::PARAM_STR);
        $result->bindParam(':recebe_artigo', $recebe_artigo, PDO::PARAM_STR);
        $result->execute();



    move_uploaded_file($recebe_imagem['tmp_name'], $destino.$img_nome1);

    echo "Postado com Sucesso!";
    header('Refresh:2, admin.php');

}catch(PDOException $e) {


    echo $e->getMessage();

}


?>