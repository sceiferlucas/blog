<?php 

session_start();

if (empty($_SESSION['adm']) || $_SESSION['adm']!=1){
    header('location:index.php');
}
	require 'app/config.php';
	include'app/header.php';
 ?>


<div id="cadPostagem">
	<form action="incluirPostagem.php" method="POST" enctype="multipart/form-data">
		<h3>Cadastrar Artigo</h3><hr><br>
		<h4>Titulo</h4><br>
		<input class="inputf" type="text" name="titulo" placeholder="Titulo da Postagem"><br><br>
		<h4>Descrição Rapida</h4><br>
		<input type="text" class="inputf" name="descricao" placeholder="Resuminho"><br><br>
		<h4>Tumbnail</h4><br>
		<input class="inputf" accept="image/*" type="file" name="tumb"><br><br>
		<h4>Artigo</h4><br>
		<textarea name="artigo">
			Escreva sua postagem aqui.
		</textarea><br><br>
		<input class="inputf" type="submit" name="enviar" value="Enviar"><br><br>
	</form>
</div>

<?php 
	include 'app/footer.php';
 ?>