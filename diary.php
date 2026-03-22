<?php
session_start();
include("db.php");

$id = $_SESSION['user_id'];

if ($_POST) {
  $food = $_POST['food'];
  $cal = $_POST['calories'];
  $protein = $_POST['protein'];
  $carbs = $_POST['carbs'];
  $fats = $_POST['fats'];

  $date = date("Y-m-d");

  $conn->query("INSERT INTO diary (user_id,date,food_name,calories,protein,carbs,fats)
  VALUES ($id,'$date','$food','$cal','$protein','$carbs','$fats')");
}
?>

<h2>Diary</h2>

<input id="food" placeholder="Search food">
<button onclick="searchFood()">Search</button>

<div id="result"></div>

<form method="POST">
<input name="food" id="f">
<input name="calories" id="c">
<input name="protein" id="p">
<input name="carbs" id="cb">
<input name="fats" id="fats">
<button>Add</button>
</form>

<script src="app.js"></script>

<a href="dashboard.php">Back</a>