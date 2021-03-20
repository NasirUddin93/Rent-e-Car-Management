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
        <?php 
        	$conn =new mysqli('localhost', 'root', '', 'db_mid_term');
		  $Testid =$_REQUEST['id'];
        ?>
	<div class="Cus_box">
		<lebal><h2>Insert Tranction Ralated Info </h2></lebal>
		<form action="Bill.php" method="POST">
			<label for="">Customer ID:</label>
			<input name="id" type="text" placeholder="Customer ID" value=<?php echo $Testid ?>><br><br>
			<label for="">Taking Date:</label>
			<input name="takeTime" type="Time" placeholder="Taking Date"><br><br>
			<label for="">Return Time</label>
			<input name="ReturnTime" type="Time" placeholder="Return Time "><br><br>
			<label for="">Law Cost :</label>
			<input name="lawCost" type="text" placeholder="Law Cost"><br><br>
			<label for="">Damage Cost :</label>
			<input name="damageCost" type="text" placeholder="Damage Cost "><br><br>
			<label for="">Other Cost :</label>
			<input name="otherCost" type="text" placeholder="Other Cost"><br><br>
			<label for="">Vate Rate % :</label>
			<input name="vateRate" type="text" placeholder="Vate Rate %"><br><br>
<!-- 			           <?php echo "<tr><td><a href=Bill.php?id=$Testid>Make Bill</a></td></tr>";
			             ?> -->
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