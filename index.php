<?php
require_once("header.php");

include("init.php");

$account = $AccountManager->getByEmail('email@gg.com');

// $account->email;
// $account->password;
?>
<link rel="stylesheet" href="index.css">


<h1>Bienvenue sur notre boutique</h1>

<div>
<h3>Cliquez ici pour accéder aux catégories de nos différents produits</h3>
<a href ="categories.php">Catégories</a>
</div>
<br>

<?php
require_once("footer.php")
?>