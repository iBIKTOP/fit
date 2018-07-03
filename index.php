<?php include("db.php"); ?>
<?php include("header.php"); ?>
	<div class="greating">
		<div class="row text-center align-items-center justify-content-around m-0 p-0 fon">
			<div class="col-6 text-light">
				<h1>Калькулятор FitAll</h1>
				<h3>это универсальный путеводитель<br>к здоровому образу жизни.</h3>
			</div>
			<form class="form-signin col-3 m-1 p-3 reg_form">
			  <img class="mb-4" src="./img/icon1.png" alt="" width="72" height="72">
			  <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
			  <input type="text" id="inputName" class="form-control mb-1" placeholder="Имя" required autofocus>
			  <input type="text" id="inputName" class="form-control mb-1" placeholder="Логин" required>
			  <input type="password" id="inputPassword1" class="form-control mb-1" placeholder="Пароль" required>
			  <input type="password" id="inputPassword2" class="form-control mb-1" placeholder="Пароль еще раз" required>
			  <div class="checkbox mb-3">
			    <label>
			      <input type="checkbox" value="remember-me"> Запомнить меня
			    </label>
			  </div>
			  <button class="btn btn-lg btn-primary btn-block" type="submit" style="box-shadow: 0 0 5px black;">Зарегестрироваться</button>
			  <!-- <p class="mt-5 mb-3 text-muted">&copy; 2018</p> -->
			</form>
			<div class="col-1"></div>
		</div>
	</div>
	<br>

	<div class="col-12 text-center">
		<hr>
		<h1>Формулы для расчета величины основного обмена (ВОО)</h1>
		<hr>
	</div>
	<div class="row m-0 p-0 justify-content-around">
		<div class="col-6 m-0">
			<div class="card mt-3">
			  <div class="card-header">Формула Харриса-Бенедикта</div>
			  <div class="card-body">
			    <!-- <h5 class="card-title">Специальный заголовок</h5> -->
			    <p class="card-text">Была выведена в 1919 году. В настоящее время формула Харриса-Бенедикта точна в основном по отношению к людям, ведущим физически активный образ жизни.</p>
				Расчет величины основного обмена (ВОО) по формуле Харриса-Бенедикта:
			    Женщины: ВОО = 655,1 + 9,6 * масса тела (кг) + 1,85 * рост(см) — 4,68 * возраст (годы)<br>
			    Мужчины: ВОО = 66,47 + 13,75 * масса тела (кг) + 5,0 * рост(см) — 6,74 * возраст (годы)<br>
			    <!-- <a href="#" class="btn btn-primary">Переход куда-нибудь</a> -->
			  </div>
		  </div>
		</div>
		<div class="col-6 mt-3">
			<div class="card m-0">
			  <div class="card-header">Формула Маффина-Джеора</div>
			  <div class="card-body">
			    <!-- <h5 class="card-title">Специальный заголовок</h5> -->
			    <p class="card-text">Формула основного обмена Маффина-Джеора (или Миффлина-Сан Жеора) – это современный метод расчёта. Формула выведена в 2005 году и по утверждению Американской Диетической Ассоциации (АДА) на сегодняшний день позволяет наиболее точно рассчитать сколько калорий тратит организм здорового взрослого человека в состоянии покоя.</p>
			    Расчет величины основного обмена (ВОО) по формуле Миффлина-Сан Жеора:<br>

			    Женщины: ВОО = 9,99 * вес(кг) + 6.25 * рост (см) — 4,92 * возраст — 161<br>
			    Мужчины: ВОО = 9,99 * вес (кг) + 6.25 * рост (см) — 4,92 * возраст + 5<br>
			    <!-- <a href="#" class="btn btn-primary">Переход куда-нибудь</a> -->
			  </div>
		  </div>
		</div>
	</div><hr><br>

	<div class="col-12">
		<div class="card m-0">
			  <div class="card-header">Расчет суточной нормы каллорий</div>
			  <div class="card-body">
			    <!-- <h5 class="card-title">Специальный заголовок</h5> -->
			    <p class="card-text">
		    	Рассчитав по формуле Харриса-Бенедикта или формуле Маффина-Джеора величину основного обмена веществ, можно вычислить и примерное количество калорий, необходимых в сутки для поддержания веса тела с учетом уровня физической нагрузки. Для этого умножаем полученное число на коэффициент физической активности:</p>
		    	<table border="1" align="center" cellpadding="5">
		    		<tr>
						<th>Количество физической нагрузки</th>
						<th>Суточный расход энергии</th>
					</tr>
					<tr>
						<td>Минимальные нагрузки (сидячая работа)</td>
						<td>ВОО * 1.2</td>
					</tr>
					<tr>
						<td>Немного дневной активности и легкие упражнения 1-3 раза в неделю</td>
						<td>ВОО * 1.375</td>
					</tr>
					<tr>
						<td>Тренировки 4-5 раз в неделю (или работа средней тяжести)</td>
						<td>ВОО * 1.4625</td>
					</tr>
					<tr>
						<td>Интенсивные тренировки 4-5 раз в неделю</td>
						<td>ВОО * 1.550</td>
					</tr>
					<tr>
						<td>Ежедневные тренировки</td>
						<td>ВОО * 1.6375</td>
					</tr>
					<tr>
						<td>Ежедневные интенсивные тренировки или тренировки 2 раза в день</td>
						<td>ВОО * 1.725</td>
					</tr>
					<tr>
						<td>Тяжелая физическая работа или интенсивные тренировки 2 раза в день</td>
						<td>ВОО * 1.9</td>
					</tr><br>
				</table><br>
				Полученное в результате число – это то количество калорий, которое можно употреблять в день, чтобы не набирать вес.
			</div>
		</div>
	</div><br>


    
<?php include("footer.php"); ?>