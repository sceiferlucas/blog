<?php
    session_start();

    include 'app/config.php';
    include 'app/header.php';

        if (!empty($_GET['id'])){
            $id_post = $_GET['id'];
            $consulta = $conn->query("SELECT * FROM postagens WHERE id='$id_post'");
            $exibir = $consulta->fetch(PDO::FETCH_ASSOC);

        }else{
            header('location:index.php');
        }
?>

    <div id="detalhes">
        <h2><?php echo $exibir['titulo']?></h2><br><br>
        <h3><?php echo $exibir['descricao'];?></h3>
        <div id="tumb"><img src="style/imagens/<?php echo $exibir['imagem'];?>"></div><br><br>
        <div id="artigo"><?php echo $exibir['texto'];?></div>
    </div>


<?php
include 'app/footer.php';
?>
