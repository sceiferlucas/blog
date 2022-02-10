<?php 
	require 'app/config.php';
	include'app/header.php';
 ?>
<div id="formLogin">
	<form action="login.php" method="POST">
		<h3>Area do Membro</h3><br><hr><br>
		<h4>Usuario: </h4><br>
		<input class="inputf" type="text" name="email" placeholder="Seu Email de Login"><br><br>
		<h4>Senha: </h4><br>
		<input class="inputf" type="password" name="senha" placeholder="Sua Senha"><br><br><br>
		<input class="inputf" type="submit" name="enviar" value="Enviar">
	</form><br><br>
	<a href="formUsuario.php">Ainda Não Tenho Cadastro</a><br><br>
</div>

<?php 
	include 'app/footer.php';
 ?>