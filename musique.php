<?php 
require_once("header.php");
$products = [
  ['id' => 1, 'name' => 'kjdfhg'],
  ['id' => 2, 'name' => 'Pkdshun']
];
?>
<a href ="categories.php">Back</a>
<?php
foreach ($products as $produit){

  echo '<div class="card"> 
  <img src="/img/damso.jpg" alt="Album1" style="width:100%"/>
  <h1>'.$produit['name'].'</h1>
  <p class="price">$12.99</p>
  <p>Album</p>
  <p><button>Add to Cart</button></p>
</div>';


}
?>

<div class="card">
  <img src="" alt="Album2" style="width:100%">
  <h1>??????</h1>
  <p class="price">$19.99</p>
  <p>Lourd</p>
  <p><button>Add to Cart</button></p>
</div>

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

<?php
require_once("footer.php")
?>