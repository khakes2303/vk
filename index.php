<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		.name{
			color:#496A9E;
			font-weight:700;
		}
		.job{
			color: #6B7885;
			font-weight: 100;
		}
		.birthdate{
			color:#496A9E;
			font-weight:300;
		}
		.header{
			background-color: #4A76A8;
		}
	</style>
</head>
<body style="background-color: #EDEEF0">
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root','root','vk');
		$query = mysqli_query($con, "SELECT * FROM friends1");
		$delete = "DELETE FROM friends1 WHERE id='{$_GET['id']}'";
 		mysqli_query($con, $delete);

	 ?>
	 <div class="col-12 header" style="height: 80px;"></div>
	 <div class="col-4 mx-auto bg-white">
	 	<?php 
	 		//цикл начинается
	 		for($i=0;$i<3;$i++){
	 			$stroka = $query->fetch_assoc();
	 	?>		
	 			<div class="border-bottom p-2">
	 				<div class="row">
	 					<div class=" col-2 rounded-circle" style="height: 100px; width: 100px; background-image: url(<?php echo $stroka["img"]; ?>); background-position: center; background-size: cover">	 						 											
	 					</div>
	 					<div class="col-6">
	 						<p class="name"><?php echo $stroka["name"]; ?></p>
	 						<p class="birthdate"><?php echo $stroka["birthdate"]; ?></p>
	 						<p class="job"><?php echo $stroka["job"]; ?></p>
	 					</div>
	 					<div class="col-4">
	 						
	 						<form action="index.php" method="GET">
						 		<input value="<?php echo $stroka["id"]; ?>" type="text" name="id">
						 		<button class="btn">Удалить</button>
						 	</form>					
	 					</div>
	 				</div>
	 			</div>

	 		
	 	<?php 	 } ?>
	 	
	 </div>
</body>
</html>