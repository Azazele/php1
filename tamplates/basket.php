<?php
	 $basketArrayCookie =  unserialize($_COOKIE['basket']);
	 $basketArraySession =  $_SESSION['basket'];
?>

<div class="container">
	<div class="goods">
	<?php if (!$_SESSION['is_auth']) :?>
		<?php if ($basketArrayCookie):
			foreach ($basketArrayCookie as $key => $id) {
				$good = queryGetGoodById (dbConnect (), 'goods', $id); 
				$img = queryGetImageById (dbConnect (), 'goods_images', $good[0]['img']);
		?>
			<div class="good">
				<a href="?page=goods&id=<?=$good[0]['id']?>">
					<img src="./public/img_content/small/<?=$img[0]['name']?>" alt="<?=$img[0]['name']?>">
					<p class="name"><?=$good[0]['name'];?></p>
					<p class="price"><?=$good[0]['price'];?> руб</p>
					</a>
					<form action="./delete_basket.php" method="post">
						<input type="hidden" name="id_good_delete_cookie" value="<?=$key?>">
						<button type="submit" class="btn btn-primary">Удалить из корзины</button>
					</form>
			</div>

		<?php } else :?>
			<p>Ваша корзина пуста :(</p>

		<?php endif; ?>

	<?php else :?>
		<?php if ($basketArraySession) : 
			foreach ($basketArraySession as $key => $id) {
				$good = queryGetGoodById (dbConnect (), 'goods', $id); 
				$img = queryGetImageById (dbConnect (), 'goods_images', $good[0]['img']);
		?>
			<div class="good">
				<a href="?page=goods&id=<?=$good[0]['id']?>">
					<img src="./public/img_content/small/<?=$img[0]['name']?>" alt="<?=$img[0]['name']?>">
					<p class="name"><?=$good[0]['name'];?></p>
					<p class="price"><?=$good[0]['price'];?> руб</p>
					</a>
					<form action="./delete_basket.php" method="post">
						<input type="hidden" name="id_good_delete_session" value="<?=$key?>">
						<button type="submit" class="btn btn-primary">Удалить из корзины</button>
					</form>
			</div>

		<?php } else :?>
			<p>Ваша корзина пуста :(</p>
			
		<?php endif; ?>

	<?php endif; ?>
	</div>
</div>