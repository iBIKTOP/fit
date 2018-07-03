<?php include("db.php");?>
<?php
	if(isset($_REQUEST["login"])){
		$login = htmlspecialchars(strip_tags(trim($_REQUEST["login"])));
		$pass = htmlspecialchars(strip_tags(trim($_REQUEST["pass"])));
		if(strlen($login)>0){
			$query = "SELECT * FROM `users` WHERE `login` LIKE '$login'";
			$result = mysqli_query($connection,$query);
			$row = mysqli_fetch_array($result);
			// echo $row["login"];
			// echo $row["pass"];
			if($row["pass"]==$pass){
				// echo $row["pass"];
				header("Location: ./index.php");
				exit();
			}else{
				// echo "пароль не совпал";
				$msg = "Неверный логин или пароль";
			}
		}
	}
?>






<?php include("header.php");?>

	<div class="greating">
		<div class="row text-center align-items-center justify-content-around m-0 p-0 fon">
			<form class="form-signin col-3 m-1 p-3 reg_form" method="post" action="">
				  <img class="mb-4" src="./img/icon1.png" alt="" width="72" height="72">
				  <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
				  <!-- <input type="text" id="inputName" class="form-control mb-1" placeholder="Имя" required autofocus> -->
				  <input type="text" id="login" name="login" class="form-control mb-1" placeholder="Логин" required autofocus>
				  <input type="password" id="password" name="pass" class="form-control mb-1" placeholder="Пароль" required>
				  <?php echo "<span style='color:red;'>$msg</span>";?>
				  <!-- <input type="password" id="inputPassword2" class="form-control mb-1" placeholder="Пароль еще раз" required> -->
				  <div class="checkbox mb-3">
				    <label>
				      <input type="checkbox" value="remember-me"> Запомнить меня
				    </label>
				  </div>
				  <button class="btn btn-lg btn-primary btn-block" type="submit" style="box-shadow: 0 0 5px black;">Войти</button>
				  <!-- <p class="mt-5 mb-3 text-muted">&copy; 2018</p> -->
			</form>
		</div>
	</div>



<?php include("footer.php");?>
