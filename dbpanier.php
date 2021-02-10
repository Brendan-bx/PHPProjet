<?php 

try {
    $dbp = new PDO('mysql:host=127.0.0.1;port=8889;dbname=panierdb', 'root', 'root');
}
catch (Exception $e) {
    die('Erreur MySQL, maintenance en cours.' . $e->getMessage());
}

?>