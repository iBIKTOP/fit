<?php include("db.php");?>
<?php
	
?>
<?php include("header.php");?>

	  <form class="row m-0 p-2 justify-content-between align-items-center">
	    <input class="col-10 form-control" type="search" placeholder="Search" aria-label="Search">
	    <button class="col-2 btn btn-outline-success" type="submit">Search</button>
	  </form>

	<div class="row m-2 p-1 align-items-center justify-content-between eat ">
    	<div class="col-12 p-1 eat_header row m-0 justify-content-between align-items-center text-center">
    		<div class="col-9 p-1 align-items-center text-left ">Общая база данных:</div>
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
	    		<a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary btn-sm">X</a>
	    	</div>
	    </div>
    	<?php } ?>
    </div>
    <!-- Первая таблица конец -->

<?php include("footer.php");?>