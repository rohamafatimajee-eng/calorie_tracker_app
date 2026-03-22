<?php
session_start();
include("db.php");

if (!isset($_SESSION['user_id'])) {
  header("Location: index.php");
}

$id = $_SESSION['user_id'];

$result = $conn->query("SELECT SUM(calories) as total FROM diary WHERE user_id=$id");
$data = $result->fetch_assoc();
?>

<h2>Dashboard</h2>

<p>Total Calories Today: <?php echo $data['total'] ?? 0; ?></p>

<a href="profile.php">Profile</a><br>
<a href="diary.php">Diary</a><br>
<a href="logout.php">Logout</a>