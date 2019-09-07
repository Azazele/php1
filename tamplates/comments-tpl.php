<?php
	$comments = queryGetCommentByGoodId (dbConnect (), 'goods_comments', $good[0]['id']);

?>

<div class="comments">
	<?php foreach($comments as $key => $comment) : ?>
		<div class="media">
		  <div class="media-body">
		    <h5 class="mt-0 mb-1"><?=$comment['name']?></h5>
		    <?=$comment['content']?>
		  </div>
		</div>
	<?php endforeach; ?>


<form action="./comment.php" method="post">
	<div class="row">
		<div class="col">
			<input type="name" name="name" class="form-control" placeholder="Имя">
		</div>
		<div class="col">
			<input type="email" name="email" class="form-control" placeholder="Почта">
			<input type="hidden" name="id_good" value="<?=$good[0]['id']?>" />
		</div>
	</div>
   
    	<div class="form-group">
		    <label for="exampleFormControlTextarea1">Текст комментария</label>
		    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
		    <button class="btn btn-primary comments-btn" type="submit">Отправить</button>
		</div>
</form>
</div>