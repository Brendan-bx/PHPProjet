<?php
require_once("db.php");


if (empty($_POST['email'])or empty($_POST['password'])) {
    echo "un ou plusieurs champs sont vides\n";
}

if ($_POST['password'] != $_POST['cpassword']) {
    echo "le mot de passe est différent";
}

if ($_POST['password'] = $_POST['cpassword']) {
    echo "Le compte a été crée";
    //$requete = $db -> prepare("INSERT INTO users (id, email, password,role) VALUES (?,?,?,?)");
    //$requete-> execute([2,$_POST['email'],$_POST['password'],1]);
}

?>
<br>
<a href ="signup.php"><button>BACK</button></a>