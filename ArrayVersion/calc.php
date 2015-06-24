<?php

$content = file_get_contents('data.json');

$data = json_decode($content, TRUE);

function parseData($weight, $zipcode) {

	global $data;
	
	$zone = false;

	$zone_weight = $data["zone_weight_cost"];
	$zipcode_zone = $data["zipcode_zone"];

	for ($i = 0; $i < count($zipcode_zone); $i++) {
		if ($zipcode == $zipcode_zone[$i]["zipcode"]) {
			$zone = $zipcode_zone[$i]["zone"];
		}
	}

	if ($zone) {
		for ($i = 0; $i < count($zone_weight); $i++) {
			if ($zone == $zone_weight[$i]["zone"]) {
				if ($weight == $zone_weight[$i]["weight"]) {
					return $zone_weight[$i]["cost"] . " dollars";
				}

			}

		}

	} else {

		return false;
	}
}

$price = "";

if (isset($_POST["weight"]) && isset($_POST["zipcode"])) {
	$price = parseData($_POST["weight"], $_POST["zipcode"]);

	if (!$price) {

		$price = "Try different wgt or zip";
	}

}
?>