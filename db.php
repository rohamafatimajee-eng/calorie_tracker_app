<?php
$conn = new mysqli("sql106.infinityfree.com", "if0_41259647", "NHt3lTbzW5WOA", "if0_41259647_calorietracker");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>