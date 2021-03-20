<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
	<div class="web">
		<div class="mid">
            <?php include_once("header.php");?>
<!--             <br>
            <br>
            <br>
            <br> -->

			<?php
			$conn =new mysqli('localhost', 'root', '', 'db_mid_term');
			// $id =9001002;
			// $id =$_REQUEST['id'];
			$id =$_POST['id'];

			$result = mysqli_query($conn,"SELECT * FROM Customer WHERE customerNID='$id'");
			$test = mysqli_fetch_array($result);
			if (!$result) 
			            {
			            die("Error: Data not found..");
			            }
			                        $id=$test['customerNID'] ;
			                        $name= $test['custonerName'] ;                          
			                        $cusAdd=$test['customerAddress'] ;
			                        $cusContact=$test['customerContact'] ;
			                        $cid=$test['car_id'] ;
			  
			                    

			$result = mysqli_query($conn,"SELECT * FROM car WHERE car_id='$cid'");
			$test = mysqli_fetch_array($result);
			if (!$result) 
			            {
			            die("Error: Data not found..");
			            }
			                        $carid=$test['car_id'] ;
			                        $carname=$test['car_Name'] ;
			                        $carModel= $test['car_Model'];                          
			                        $roadddd= $test['permittedRoad'];                          
			                        $rentRate=$test['rent_Rate'];
			                        $lateFine=$test['late_Fine'] ;

			mysqli_close($conn);
			?>
<!--             <br>
            <br>
            <br>
            <br>
            <br> -->
            <br>


			<div class="table">
				<div id="printableArea">
<!-- 					<h2 align="center"> Customer Details </h2>
					<table border="1" align="center"> -->


									<div class="bill_box">	
										<div class="client">
											<?php

											 $cusID = $id;
										      $name = $name;
											  $address = $cusAdd;
											  $contact = $cusContact;
											  $carID = $carid;
											  $car = $carname;
											  $model = $carModel;
                                              $hour =1;
											  $takingTime =1;
											  $returnTime =1;
											  $lowCost = 00.00;
											  $damage = 00.00;
											  $otherCost = 00.00;
											  $takingTime =$_POST['takeTime'];
											  $returnTime =$_POST['ReturnTime'];
											  $lowCost = $_POST['lawCost'];
											  $damage = $_POST['damageCost'];
											  $otherCost = $_POST['otherCost'];
											  $vateRate = $_POST['vateRate'];
											  $hour =($returnTime - $takingTime);
											  $netRent = $rentRate * $hour;
											  $netFine = $lateFine * $hour;
											  $vat = ($netRent+$netFine+$lowCost+$damage)*($vateRate/100);
											  $total = ($netRent+$netFine+$lowCost+$damage+$vat);	
											?>
											<label for="">Client Name :</label><?php echo$name ?><br><br>
											<label for="">Client Address :</label><?php echo$address?><br><br>
											<label for="">Contact :</label><?php echo $contact?><br><br>
											<label for="">Car Name :</label><?php echo $car?>........... <label for="">Model NO :</label><?php echo $model?>....<br><br>										
											<label for="">Taking Time : <?php echo $takingTime?> ........... <label for="">Return Time :<?php echo $returnTime?>..........</label><br><br>
											<br>

									</div>
									<div class="bill">
										<table>
											<tr>
												<th>SL</th>
												<th>Description</th>
												<th>Taka</th>
												
											</tr>
											<tr>
												<td>1.</td>
												<td>Net Rent :<?php echo $hour?>hour * <?php echo $rentRate?></td>
												<td><?php echo $netRent?></td>

											</tr>
											<tr>
												<td>2.</td>
												<td>Late Fee: <?php echo $hour ?>hour * <?php echo $lateFine?></td>
												<td><?php echo $netFine?></td>
											</tr>
											<tr>
												<td>3.</td>
												<td>Low Cost</td>
												<td><?php echo $lowCost?></td>
											</tr>
											</tr>
											<tr>
												<td>4.</td>
												<td>Damages</td>
												<td><?php echo $damage?></td>
											</tr>
											</tr>
											<tr>
												<td>5.</td>
												<td>Other Cost</td>
												<td><?php echo $otherCost?></td>
											</tr>
											<tr>
												<td>6.</td>
												<td><?php echo $vateRate?>% vate</td>
												<td><?php echo $vat?></td>
											</tr>
											<tr>
												<td>7.</td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>8.</td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>9.</td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>10.</td>
												<td>Total</td>
												<td>TK-<?php echo $total?></td>
											</tr>
										</table>
									</div>
									<div class="sign">
										<div class="emp_sign">
											    <h4>Employee :</h4>
											<label>Sign.............</label><br>
											<label>Date.............</label><br>
										</div>
										<div class="client_sign">
											    <h4>Client:</h4>
											<label>Sign.............</label><br>
											<label>Date.............</label><br>
										</div>
									</div>

							    
<!-- 				</table> -->
				</div>

					                    <input id="mybtn" type="button" onclick="printDiv('printableArea')" value="Print Details!" />




										<script>
										function printDiv(divName) {
										    var printContents = document.getElementById(divName).innerHTML;
										    var originalContents = document.body.innerHTML;
										    document.body.innerHTML = printContents;
										    window.print();
										    document.body.innerHTML = originalContents;
										}</script>

										    
			</div>
<!-- This is for print portin for our print perpose -->



						
			 </div>		

            <?php include_once("Footer.php");?>	
		</div>   <!-- the end of mid -->
	</div>  <!-- end of web -->
</body>
</html>