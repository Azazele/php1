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
			<p><b><?=$good[0]['price']?> руб</b></p>
			<?php if (!$_SESSION['is_auth']) :?>
			<form action="./add_basket.php" method="post">
				<input type="hidden" name="id_good_to_cookie" value="<?=$good[0]['id']?>">
				<button type="submit" class="btn btn-primary">Добавить в корзину</button>
			</form>
			<?php else :?>
			<form action="./add_basket.php" method="post">
				<input type="hidden" name="id_good_to_session" value="<?=$good[0]['id']?>">
				<button type="submit" class="btn btn-primary">Добавить в корзину</button>
			</form>
			<?php endif; ?>
		</div>
	</div>
	<?php include TAMPLATES_DIR . 'comments-tpl.php'?>
</div>