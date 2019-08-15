<div class="container">
	<div class="images">
		<?php foreach ($images as $key => $img) :?>
		<a href="?id=<?=$img['id']?>"><img src="./public/img_content/small/<?=$img['name']?>" alt="<?=$img['name']?>"></a>
		<?php endforeach;?>
	</div>
</div>
