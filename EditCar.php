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

             <br>	
             <br>	
             <br>	
             <br>	
             <br>	
             <br>


<style>
table, th, td {
     border: 1px solid black;
   text-align:center;
      color: #222;
      background-color: rgba(240, 240, 240, 1);
}
</style>

<h2 >Car Details</h2>
<style>
    h2{
        text-align: center;
    }
</style>
<?php

// Create connection
$conn =new mysqli('localhost', 'root', '', 'db_mid_term');
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * FROM car";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table align='center'><tr><th>Car ID</th><th>Car name</th><th>Model</th><th>Permitted Road</th><th>Rent Rate</th><th>Fine Rate</th><th>Delete</th><th>Update Information</th><th>Report</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["car_id"]. "</td><td>" . $row["car_Name"]. "</td><td>" . $row["car_Model"]. " </td><td>" . $row["permittedRoad"]. "</td><td>" . $row["rent_Rate"]. "</td><td>" . $row["late_Fine"]. "</td><td><a href =DeleteCar.php?id=".$row["car_id"].">Delete</a></td><td><a href=UpdateCar.php?id=".$row["car_id"].">Update</a></td><td><a href=pdfCar.php?id=".$row["car_id"].">pdf</a></td></tr>";

     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?><br><br>
<div style="text-align: center;">
</div>

</body>
</html>
	
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
             <br>		

            <?php include_once("Footer.php");?>	
		</div>
	</div>
</body>
</html>