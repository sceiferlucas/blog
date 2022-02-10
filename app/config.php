<?php 
	try{
		$conn = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo 'Erro na conexão: '.$e->getMessage().'<br>';
		echo 'Codigo do Erro: '.$e->getCode();
	}