<?php 
	require 'app/config.php';
	include'app/header.php';
 ?>
<div id="formLogin">
	<form action="inserirUsuario.php" method="POST">
		<h3>Cadastro</h3><hr><br>
		<h4>Nome</h4><br>
		<input class="inputf" type="text" name="nome" placeholder="Insira Seu Nome"><br><br>
		<h4>Email</h4><br>
		<input class="inputf" type="email" name="email" placeholder="Insira Seu Email"><br><br>
		<h4>Senha</h4><br>
		<input class="inputf" type="password" name="senha" placeholder="Insira Sua Senha"><br><br><br>
		<input class="inputf" type="submit" name="enviar" value="Enviar"><br><br>
	</form>
</div>

<?php 
	include 'app/footer.php';
 ?>