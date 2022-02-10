<?php 
    include 'config.php';

    $exibir_Postagens = $conn->query('SELECT * FROM postagens ORDER BY id DESC');
 ?>
<?php
        if ($exibir_Postagens->rowCount()>0){
        while($exibir=$exibir_Postagens->fetch(PDO::FETCH_ASSOC)){


        ?>
<div id="area-principal">
    <h2><?php echo $exibir['titulo'];?></h2>
    <div id="data"><?php echo $exibir['data'];?></div>
    <div id="tumb"><img src="style/imagens/<?php echo $exibir['imagem'];?>"></div>
    <div id="descricao"><?php echo $exibir['descricao'];?></div><br>
    <a href="detalhes.php?id=<?php echo $exibir['id'];?>"><button class="btnler"><b>Ler Mais...</b></button></a><br><br>
 </div>
 <?php 
    }
}

  ?>