<?php include("db.php");?>
<?php
		$eat_name = $_REQUEST["eat_name"];
		$eat_name = strip_tags($eat_name);
		$eat_name = mysqli_real_escape_string($connection, $eat_name);
		
		$eat_kall = $_REQUEST["eat_kall"];
		$eat_kall = strip_tags($eat_kall);
		$eat_kall = mysqli_real_escape_string($connection, $eat_kall);

		if((strlen($eat_name) > 0) && (strlen($eat_kall) > 0)){
				
			$query = "INSERT INTO `eat` (`eat_name`, `eat_kall`) VALUES('$eat_name','$eat_kall')";
			
			mysqli_query($connection, $query);
			
			header("Location: index.php");
			
			exit();
			
		}
?>



<?php include("header.php");?>
	<form class="row m-0 p-3 justify-content-start align-items-center">
	    <div class="m-1">Введите название пищи:</div>
	    <div class="m-1 w-100"><input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите наименование еды..." name="eat_name"></div>
	    <div class="m-1">Введите количество каллорий на 100гр.</div>
	    <div class="m-1 w-20"><input type="text" class="form-control" id="formGroupExampleInput2" placeholder="kall" name="eat_kall"></div>
	  	<div class="m-1 w-100"><input type="submit" name="save" value="Ok" class="btn btn-primary btn-sm m-1"></div>
	</form>
<?php include("footer.php");?>