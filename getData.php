<?php

// Nov 26, 2019 - pretty sure population.io no longer offers an API. Experimenting with google sheets powered API via Sheetly

require_once './lib/Unirest.php';

// Using GET
if($_GET){
	$year	= $_GET["year"];
	$month	= $_GET["month"];
	$day	= $_GET["day"];
	$gender	= $_GET["gender"];
	$country= rawurlencode($_GET["country"]);
}

// Using POST
if($_POST){
	$year	= $_POST["year"];
	$month	= $_POST["month"];
	$day	= $_POST["day"];
	$gender	= $_POST["gender"];
}

$birthStr = "$day $month $year";

// Janky ass birthYear lookup
// TODO use an actual multi dimensional lookup with year of birth, gender, and country
$yearRow = 2019-$year;

// Actual call
$response = Unirest\Request::get("https://v2-api.sheety.co/e1e1ed5989db72b816986ff361f70ee2/daysLeft/usa/$yearRow"
);

// echo "<pre>";
print_r($response->raw_body);
// echo "</pre>";

?>