<?php
include ("calc.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>My Shipping Calculator</title>
	</head>
	<body>
		<h2>Shipping Calculator</h2>
		<form action="index.php" method="post">
			<label>Zipcode</label>
			
			<input type="text" value="<?php if(isset($_POST['zipcode'])){echo $_POST["zipcode"];} ?>" name="zipcode" placeholder="Enter Zipcode" />
			<label>+ Weight</label>
			<input type="text" value="<?php if(isset($_POST['weight'])){echo $_POST["weight"];} ?>" name="weight" placeholder="Enter Weight" />
			<label>=</label>
			<input type="text" value="<?php echo $price; ?>" placeholder="Your Cost" />
			<br />
			<input type="submit" value="Submit" />
		</form>
		<p>Welcome to my Shipping Calculator. Please enter in the appropriate zipcodes and weights to show the proper amount for this exercise.</p>
	
<img src="images/bogdanco_Simple_cardboard_box.png" alt="Cardboard box"/>

	</body>
</html>