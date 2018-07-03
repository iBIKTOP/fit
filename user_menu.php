<article>
			<div class="row p-0 m-0">
			  <div class="col-12 col-md-8 p-2 m-0">
			    <!-- Первая таблица начало -->
			    <div class="row m-0 mb-2 p-1 align-items-center justify-content-between eat ">
			    	<div class="col-12 p-1 eat_header row m-0 justify-content-between align-items-center text-center">
			    		<div class="col-9 p-1 align-items-center text-left " >Первый прием пищи:</div>
			    		<div class="col-3 p-0 align-items-center text-right"><a href="search.php" class="btn btn-outline-primary btn-sm m-0">+ Добавить</a></div>
			    	</div>

			    	<?php 
						function mysql_table_seek($tablename, $dbname) { 
							include("db.php");
							$table_list = mysqli_query($connection, "SHOW TABLES FROM ".$dbname.""); 
							while ($row = mysqli_fetch_array($table_list)) { 
								if ($tablename==$row[0]) { 
									return true; 
								} 
							} 

							// mysqli_num_rows()
							return false; 
						}
						if(!mysql_table_seek("user_eat","fit")){
							echo "table false";
						}else{
							echo "table true";

							$query = "SELECT * FROM `user_eat`";
							$result = mysqli_query($connection, $query);
							while($row = mysqli_fetch_array($result)){
					?>
					<div class="col-12 row p-1 m-0 justify-content-between align-items-center eat_content">
				    	<div class="col-10 col-sm-10 m-0 p-0">
				    		<a href="#">
				    			<div><?php echo $row["eat_name"]; ?></div>
				    		</a>
				    	</div>
				    	
				    	<div class="col-1 col-sm-1 p-0 m-0 align-items-center text-center btn btn-outline-primary btn-sm disabled">
				    		<div><?php echo $row["eat_kall"]; ?></div>
				    	</div>

				    	<div class="col-1 col-sm-1 m-0 p-0 align-items-center text-right ">
				    		<a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary btn-sm">X</a>
				    	</div>
				    </div>
			    <?php }} ?>
			    </div>
			    <!-- Первая таблица конец -->
			    <!-- Вторая таблица начало -->
			    <div class="row m-0 mb-2 p-1 align-items-center justify-content-between eat ">
			    	<div class="col-12 p-1 eat_header row m-0 justify-content-between align-items-center text-center">
			    		<div class="col-9 p-1 align-items-center text-left " >Второй прием пищи:</div>
			    		<div class="col-3 p-0 align-items-center text-right"><a href="add.php" class="btn btn-outline-primary btn-sm m-0">+ Добавить</a></div>
			    	</div>

			    	<?php 
							$query = "SELECT * FROM `eat`";
								
							$result = mysqli_query($connection, $query);
								
							while($row = mysqli_fetch_array($result)){
					?>
					<div class="col-12 row p-1 m-0 justify-content-between align-items-center eat_content">
				    	<div class="col-10 col-sm-10 m-0 p-0">
				    		<a href="#">
				    			<div><?php echo $row["eat_name"]; ?></div>
				    		</a>
				    	</div>
				    	
				    	<div class="col-1 col-sm-1 p-0 m-0 align-items-center text-center btn btn-outline-primary btn-sm disabled">
				    		<div><?php echo $row["eat_kall"]; ?></div>
				    	</div>

				    	<div class="col-1 col-sm-1 m-0 p-0 align-items-center text-right ">
				    		<a href="#" class="btn btn-primary btn-sm">X</a>
				    	</div>
				    </div>
			    	<?php } ?>
			    </div>
			    <!-- Вторая таблица конец -->
			    <!-- Третья таблица начало -->
			    <div class="row m-0 mb-2 p-1 align-items-center justify-content-between eat ">
			    	<div class="col-12 p-1 eat_header row m-0 justify-content-between align-items-center text-center">
			    		<div class="col-9 p-1 align-items-center text-left " >Третий прием пищи:</div>
			    		<div class="col-3 p-0 align-items-center text-right"><a href="add.php" class="btn btn-outline-primary btn-sm m-0">+ Добавить</a></div>
			    	</div>

			    	<?php 
							$query = "SELECT * FROM `eat`";
								
							$result = mysqli_query($connection, $query);
								
							while($row = mysqli_fetch_array($result)){
					?>
					<div class="col-12 row p-1 m-0 justify-content-between align-items-center eat_content">
				    	<div class="col-10 col-sm-10 m-0 p-0">
				    		<a href="#">
				    			<div><?php echo $row["eat_name"]; ?></div>
				    		</a>
				    	</div>
				    	
				    	<div class="col-1 col-sm-1 p-0 m-0 align-items-center text-center btn btn-outline-primary btn-sm disabled">
				    		<div><?php echo $row["eat_kall"]; ?></div>
				    	</div>

				    	<div class="col-1 col-sm-1 m-0 p-0 align-items-center text-right ">
				    		<a href="#" class="btn btn-primary btn-sm">X</a>
				    	</div>
				    </div>
			    	<?php } ?>
			    </div>
			    <!-- Третья таблица конец -->
			    <!-- Четвертая таблица начало -->
			    <div class="row m-0 mb-2 p-1 align-items-center justify-content-between eat ">
			    	<div class="col-12 p-1 eat_header row m-0 justify-content-between align-items-center text-center">
			    		<div class="col-9 p-1 align-items-center text-left " >Перекусы:</div>
			    		<div class="col-3 p-0 align-items-center text-right"><a href="add.php" class="btn btn-outline-primary btn-sm m-0">+ Добавить</a></div>
			    	</div>

			    	<?php 
							$query = "SELECT * FROM `eat`";
								
							$result = mysqli_query($connection, $query);
								
							while($row = mysqli_fetch_array($result)){
					?>
					<div class="col-12 row p-1 m-0 justify-content-between align-items-center eat_content">
				    	<div class="col-10 col-sm-10 m-0 p-0">
				    		<a href="#">
				    			<div><?php echo $row["eat_name"]; ?></div>
				    		</a>
				    	</div>
				    	
				    	<div class="col-1 col-sm-1 p-0 m-0 align-items-center text-center btn btn-outline-primary btn-sm disabled">
				    		<div><?php echo $row["eat_kall"]; ?></div>
				    	</div>

				    	<div class="col-1 col-sm-1 m-0 p-0 align-items-center text-right ">
				    		<a href="#" class="btn btn-primary btn-sm">X</a>
				    	</div>
				    </div>
			    	<?php } ?>
			    </div>
			    <!-- Четвертая таблица конец -->				


			  </div>
			  <div class="col-md-4 d-none d-md-block">
			    <div class="card border-dark m-3">
				  <div class="card-header text-center"><h3>Каллории:</h3></div>
				  <div class="card-body">
				    <h5 class="card-title text-center">1500</h5>
				  </div>
				</div>
				<div class="card border-dark m-3">
				  <div class="card-header text-center p-0"><h4>Белки:</h4></div>
				  <div class="card-body p-0">
				    <h5 class="card-title text-center">1500</h5>
				  </div>
				</div>
				<div class="card border-dark m-3">
				  <div class="card-header text-center p-0"><h4>Жиры:</h4></div>
				  <div class="card-body p-0">
				    <h5 class="card-title text-center">1500</h5>
				  </div>
				</div>
				<div class="card border-dark m-3">
				  <div class="card-header text-center p-0"><h4>Углеводы:</h4></div>
				  <div class="card-body p-0">
				    <h5 class="card-title text-center">1500</h5>
				  </div>
				</div>
				<div class="card bg-light m-3">
				  <div class="card-header text-center p-0"><h5>Цель:</h5></div>
				  <div class="card-body p-0">
				    <h5 class="card-title text-center">Цель и акктуальные данные пользователя</h5>
				  </div>
				</div>
			  </div>
			</div>
		</article>