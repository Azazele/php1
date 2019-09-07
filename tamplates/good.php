<?php 
$good = queryGetGoodById (dbConnect (), 'goods', $id); 
$img = queryGetImageById (dbConnect (), 'goods_images', $good[0]['img']);
?>
<div class="container">
	<h1><?=$good[0]['name']?></h1>
	<div class="good-single">
		<div class="left-block">
			<img src="./public/img_content/<?=$img[0]['name']?>" alt="<?=$img[0]['name']?>">
		</div>
		<div class="right-block">
			<p><?=$good[0]['description']?></p>
			<a href="?buy=id<?=$good[0]['id']?>" class="buy">Купить за <?=$good[0]['price']?> руб</a>
		</div>
	</div>
	<?php include TAMPLATES_DIR . 'comments-tpl.php'?>
</div>