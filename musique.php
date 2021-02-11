<?php 
require_once("header.php");
$products = [
  ['id' => 1, 'name' => 'Damso - Ipséité', 'image' => "/img/damso.jpg", 'price' => '$19,99'],
  ['id' => 2, 'name' => 'Imagine Dragons - Origins', 'image' => "/img/imagine-dragons.jpg", 'price' => '$12,99']
];
?>
<br>
<a href ="categories.php">Back</a>
<?php
foreach ($products as $produit){

  echo '<div class="card"> 
  <img src="'.$produit['image'].'" alt="Album1" style="width:100%"/>
  <h1>'.$produit['name'].'</h1>
  <p class="price">'.$produit['price'].'</p>
  <p>Album</p>
  <p><a href ="prepanier.php"><button>Add to Cart</button></a></p>
</div>';


}

?>
<!--
<div class="card">
  <img src="/img/imagine-dragons.jpg" alt="Album2" style="width:100%">
  <h1>Imagine Dragons - Origins</h1>
  <p class="price">$19.99</p>
  <p>Lourd</p>
  <p><button>Add to Cart</button></p>
</div>
<a href ="categories.php">Back</a> -->

<style type='text/css'>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
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

<?php
require_once("footer.php")
?>