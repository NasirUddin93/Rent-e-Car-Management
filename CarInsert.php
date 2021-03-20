<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="web">
		<div class="mid">
        <?php include_once("header.php");?>
	<div class="Cus_box">
		<lebal><h2>New Car Entry </h2></lebal>
		<form action="CarEntry.php" method="POST">
			<label for="">Car ID :</label>
			<input name="carID" type="text" placeholder="Car ID"><br><br>
			<label for="">Car Name :</label>
			<input name="carname" type="text" placeholder="Car Name"><br><br>
			<label for="">Car Model :</label>
			<input name="carmodel" type="text" placeholder="Car model"><br><br>
			<label for="">Permitted Road :</label>
			<input name="road" type="text" placeholder="Permitted Road"><br><br>
			<label for="">Rent Rate\hour :</label>
			<input name="rent" type="text" placeholder="Rent per hour"><br><br>
			<label for="">Late Fine\hour :</label>
			<input name="fine" type="text" placeholder="Fine per hour"><br><br>
			
			<input type="submit" value="Submit">
		</form>
	</div>			

			<br>
			<br>
			<br>
			<br>


            <?php include_once("Footer.php");?>	
		</div>
	</div>
</body>
</html>