<?php
	if(isset($_REQUEST["name"])){
		$name = htmlspecialchars(strip_tags(trim($_REQUEST["name"])));
		$login = htmlspecialchars(strip_tags(trim($_REQUEST["login"])));
		$password1 = htmlspecialchars(strip_tags(trim($_REQUEST["password1"])));
		$password2 = htmlspecialchars(strip_tags(trim($_REQUEST["password2"])));
		if(strlen($name)>0 && strlen($login)>0 && $password1==$password2){
			include("db.php");
			$query = "INSERT INTO `users` (`id`, `name`, `login`, `pass`) VALUES (NULL, '$name', '$login', '$password1')";
			mysqli_query($connection,$query);
			header("Location: ./index.php");
			exit();
		}else{
			echo "Что-то пошло не так!";
		}
	}else{
		echo "Проверка на существование переменной не прошла!";
	}
?>





<?php include("header.php");?>

	<form method="get" action="registration.php" class="m-3 p-3 eat">
	  <div class="form-group">
	    <label for="name">Ваше имя:</label>
	    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
	    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
	  </div>
	  <div class="form-group">
	    <label for="login">Ваш login:</label>
	    <input type="text" class="form-control" id="login" placeholder="Enter login" name="login">
	    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
	  </div>
	  <div class="form-group">
	    <label for="password1">Ваш пароль</label>
	    <input type="password" class="form-control" id="password1" placeholder="Password" name="password1">
	  </div>
	  <div class="form-group">
	    <label for="password2">Ваш пароль еще раз</label>
	    <input type="password" class="form-control" id="password2" placeholder="Password" name="password2">
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
	</form>

<?php include("footer.php");?>