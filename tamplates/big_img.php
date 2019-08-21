<?php $bigImg = queryGetImageById (dbConnect (), 'category_img', $page); ?>
<div class="container">
	<div class="big-images">
		<?php foreach ($bigImg as $key => $img) :?>
		<a href="?id=<?=$img['id']?>"><img src="./public/img_content/<?=$img['name']?>" alt="<?=$img['name']?>"></a>
		<?php endforeach;?>
	</div>
</div>
