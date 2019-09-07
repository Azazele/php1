<?php $goods = queryGetAllGood (dbConnect (), 'goods'); ?>
<div class="container">
	<div class="goods">
	<?php
		foreach($goods as $key => $good) : 
		$img = queryGetImageById (dbConnect (), 'goods_images', $good['img']);
	?>
		<div class="good">
			<a href="?page=goods&id=<?=$good['id']?>">
				<img src="./public/img_content/small/<?=$img[0]['name']?>" alt="<?=$img[0]['name']?>">
				<p class="name"><?=$good['name'];?></p>
				<p class="price"><?=$good['price'];?> руб</p>
				</a>
				<?php if (!$_SESSION['is_auth']) :?>
				<form action="./add_basket.php" method="post">
					<input type="hidden" name="id_good_to_cookie" value="<?=$good['id']?>">
					<button type="submit" class="btn btn-primary">Добавить в корзину</button>
				</form>
				<?php else :?>
				<form action="./add_basket.php" method="post">
					<input type="hidden" name="id_good_to_session" value="<?=$good['id']?>">
					<button type="submit" class="btn btn-primary">Добавить в корзину</button>
				</form>
				<?php endif; ?>
		</div>
	<?php endforeach;?>
	</div>
</div>
