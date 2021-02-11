<?php 


/* require_once("init.php"); */
require_once("db.php");

if(isset($_POST['submit'])) {

    $test = $db->prepare("DELETE * FROM users WHERE email ");

    $test->execute([$_POST['email']]);
    
    $result = $test->fetch(PDO::FETCH_ASSOC);

// check empty fields
if (empty($_POST['email']) || empty($_POST['password'])) {
    header('Location: delete.php?=empty');
    die();
}

// check email
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    header('Location: delete.php?=false');
    die();
}

if (($result['password'] !== $_POST['password']) || ($result['email'] !== $_POST['email'])) {
    header('Location: delete.php?=mot');
    die();
} else {
    $_SESSION['user'] = $result;
    header('Location: delete.php?=sucess');
    die();
    }
}



?>
