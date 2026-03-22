<?php
$query = $_GET['query'];
$key = "YOUR_API_KEY";

$url = "https://api.nal.usda.gov/fdc/v1/foods/search?query=$query&api_key=$key";

echo file_get_contents($url);
?>