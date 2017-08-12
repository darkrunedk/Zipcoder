<?php

// Include the Zipcoder class
require_once('../../../classes/Zipcoder.php');

$zipcode = (int) $_GET['zipcode'];
if (!empty($zipcode)) {
	$Zipcoder = new Zipcoder($zipcode);
	$city = $Zipcoder->getCity();
	echo json_encode($city);
}

?>