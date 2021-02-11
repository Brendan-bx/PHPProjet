<?php 
session_start();

require "handle_login.php";

echo $_SESSION['user']['email'];
?>

<h1>Login</h1>

<form method="POST">
    Email: <input name="email" /><br />
    Passw: <input name="password" type="password" /><br />
    <button name="submit" type="submit">Login</button>
</form>