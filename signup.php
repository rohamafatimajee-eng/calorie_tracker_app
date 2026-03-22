<?php
include("db.php");

if ($_POST) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $conn->query("INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");
  echo "Signup successful <a href='index.php'>Login</a>";
}
?>

<form method="POST">
<h2>Signup</h2>
<input name="name" placeholder="Name" required>
<input type="email" name="email" required>
<input type="password" name="password" required>
<button>Signup</button>
</form>