<?php 
session_start();

require "handle_suppresion.php";

?>

<h1>Delete</h1>

<form method="POST">
    Email: <input name="email" /><br />
    Password: <input name="password" type="password" /><br />
    <button type="submit">Delete</button>
</form>