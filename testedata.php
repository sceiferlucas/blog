<?php
require 'app/config.php';

$data = date('Y/m/d');

$inserir = "INSERT INTO postagens (data) VALUES (:data)";

	try{
        $result = $conn->prepare($inserir);
        $result->bindParam(':data', $data, PDO::PARAM_STR);
        $result->execute();

	if ($inserir) {
		echo "deu certo!";
	}else{
		echo "Algo deu errado!".'<br>';

         echo $data;
	}

	}catch(PDOException $e){

	echo $e->getMessage();

	}