<div class="container">
	<div class="alert alert-success" role="alert">
	  <?=$_SESSION['last_auth_status']?>
	</div>

	<?php if (!$_SESSION['is_auth']) :?>
	<div class="accordion" id="accordionExample">
	  <div class="card">
	    <div class="card-header" id="headingOne">
	      <h5 class="mb-0">
	        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	          Вход
	        </button>
	      </h5>
	    </div>

	    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
	      <div class="card-body">

	        <form action="./entrance.php" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Почта или логин</label><br>
			    <input name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш e-mail или имя пользователя">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputПароль1">Пароль</label><br>
			    <input type="password" name="password" class="form-control" id="exampleInputПароль1" placeholder="Пароль">
			  </div>
			  <button type="submit" class="btn btn-primary">Вход</button>
			</form>

	      </div>
	    </div>
	  </div>
	  <div class="card">
	    <div class="card-header" id="headingTwo">
	      <h5 class="mb-0">
	        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	          Регистрация
	        </button>
	      </h5>
	    </div>
	    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
	      <div class="card-body">

	        <form action="./registration.php" method="post">
	          <div class="form-group">
			    <label for="exampleInputЛогин1">Логин</label><br>
			    <input name="login" class="form-control" id="exampleInputЛогин1" placeholder="Введите имя пользователя">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">E-mail адрес</label><br>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш e-mail">
			    <small id="emailHelp" class="form-text text-muted">Мы никогда и никому не передадим вашу почту</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputПароль1">Пароль</label><br>
			    <input type="password" name="password" class="form-control" id="exampleInputПароль1" placeholder="Пароль">
			  </div>
			  <button type="submit" class="btn btn-primary">Регистрация</button>
			</form>

	      </div>
	    </div>
	  </div>
	</div>
	<?php else :?>
		<div class="alert alert-success" role="alert">
		  Вы вошли как <?=$_SESSION['user_name']?>
		</div>
	<?php endif; ?>

</div>