<?php
require_once("header.php");

include("init.php");

$account = $AccountManager->getByEmail('email@gg.com');

// $account->email;
// $account->password;
?>

<h1>Bienvenue sur notre boutique</h1>
<a href ="signup.php">S'inscrire</a>
<a href ="login.php">Se connecter</a>

<h3>Cliquez ici pour accéder aux catégories de nos différents produits</h3>
<a href ="categories.php">Catégories</a>


<a href ="logout.php">Se déconnecter</a>
<?php
require_once("footer.php")
?>