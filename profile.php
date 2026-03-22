<?php
session_start();
include("db.php");

$id = $_SESSION['user_id'];

if ($_POST) {
  $height = $_POST['height'];
  $weight = $_POST['weight'];

  $h = $height / 100;
  $bmi = $weight / ($h * $h);

  $conn->query("UPDATE users SET height='$height', weight='$weight', bmi='$bmi' WHERE id=$id");
}

$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
?>

<h2>Profile</h2>

<form method="POST">
<input name="height" placeholder="Height (cm)" value="<?php echo $user['height']; ?>">
<input name="weight" placeholder="Weight (kg)" value="<?php echo $user['weight']; ?>">
<button>Save</button>
</form>

<p>BMI: <?php echo $user['bmi']; ?></p>

<a href="dashboard.php">Back</a>