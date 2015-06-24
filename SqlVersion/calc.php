<?php

include 'connection.php';

// $content = file_get_contents('data.json');
//
// $data = json_decode($content, TRUE);

function parseData($weight, $zipcode) {
	global $con;
	//FIND THE ROW THAT HAS THE ZIPCODE WE PASS IN.
	$sql = "SELECT * FROM zipcode_zone WHERE zipcode = '$zipcode'";
	$query = mysqli_query($con, $sql) or die(mysqli_error($con));
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		//GET THE ZONE FROM THAT ROW
		$zone = $row["zone"];

		//IF THE ZONE IS NOT NULL
		if ($zone) {
			
			//GET THE ZONE_WEIGTH ROW WHERE THE ZONE IS EQUAL TO THAT ZONE
			$sql2 = "SELECT * FROM zone_weight_cost WHERE zone = '$zone'";
			$query2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
			while ($row2 = mysqli_fetch_array($query2, MYSQLI_ASSOC)) {
				//GET THE WEIGHT INTO A VARIABLE
				$checkweight = $row2["weight"];
				
				//CHECK THE WEIGTH AGAINST THE WEIGHT PASSED IN.
				//IF IT PASSES. YOU HAVE FOUND THE COST IN THAT ROW.
				if ($checkweight === $weight) {
					return $row2['cost'] . " dollars";
				} 
					
			}
		} else {
			return false;
		}
	}
}	

$price = "";
$error = "";

if (isset($_POST["weight"]) && isset($_POST["zipcode"])) {
	$price = parseData($_POST["weight"], $_POST["zipcode"]);
	if (!$price) {

		$price = "Try different wgt or zip";
		
	}

}
?>