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
		<lebal><h2>Customer Entry </h2></lebal>
		<form action="CustomerEntry.php" method="POST">
			<label for="">Customer Name :</label>
			<input name="name" type="text" placeholder="Name"><br><br>
			<label for="">Customer Address :</label>
			<input name="addresss" type="text" placeholder="Address"><br><br>
			<label for="">Customer Contact :</label>
			<input name="contactt" type="text" placeholder="Contact"><br><br>
			<label for="">Customer NID :</label>
			<input name="customernid" type="text" placeholder="Customer NID"><br><br>
			<label for="">Rented Car ID:</label>
<!-- 			<input name="carID" type="text" placeholder="Rented Car ID"><br><br> -->
			<select name="carID">
			  <option value=5007>5007</option>
			  <option value=5008>5008</option>
			  <option value=5009>5009</option>
			  <option value=50010>50010</option>
			  <option value=50011>50011</option>
			  <option value=50012>50012</option>
			  <option value=50013>50013</option>
			  <option value=50014>50014</option>
			  <option value=50015>50015</option>
			  <option value=50016>50016</option>
			  <option value=50017>50017</option>
			  <option value=50018>50018</option>
			  <option value=50019>50019</option>
			  <option value=50020>50020</option>
			  <option value=50021>50021</option>

			</select><br><br>
			<input type="submit" value="Submit">
		</form>
	</div>			
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>


            <?php include_once("Footer.php");?>	
		</div>
	</div>
</body>
</html>