<?php
session_start();
include("db.php");

if ($_POST) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = $conn->query("SELECT * FROM users WHERE email='$email'");
  $user = $result->fetch_assoc();

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header("Location: dashboard.php");
  } else {
    echo "Invalid login";
  }
}
?>

<form method="POST">
<h2>Login</h2>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button>Login</button>
</form>

<a href="signup.php">Signup</a>
<!-- HI CHALGA SIM SIM -->