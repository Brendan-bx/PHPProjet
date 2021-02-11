<?php 
require_once("header.php");
$products = [
  ['id' => 1, 'name' => 'Burger', 'image' => "/img/Burger.png", 'price' => '$15,99', 'desc' => 'Burger'],
  ['id' => 2, 'name' => 'Frites', 'image' => "/img/Frites.png", 'price' => '$19,99', 'desc' => 'Frites']
];
?>
<br>
<?php
foreach ($products as $produit){

  echo '<div class="card"> 
  <img src="'.$produit['image'].'"style="width:100%"/>
  <h1>'.$produit['name'].'</h1>
  <p class="price">'.$produit['price'].'</p>
  <p>'.$produit['desc'].'</p>
  <p><a href ="prepanier.php"><button>Add to Cart</button></a></p>
</div>';


}

?>


<a href ="categories.php">Back</a>


<?php
require_once("footer.php")
?>

<style type='text/css'>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>