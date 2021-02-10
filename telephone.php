<?php
require_once("header.php")
?>

<div class="card">
  <img src="/img/Samsung.png" alt="Samsung" style="width:100%">
  <h1>Samsung Galaxy</h1>
  <p class="price">$499.99</p>
  <p>Les androids c'est mieux</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="/img/Iphone12.png" alt="Iphone" style="width:100%">
  <h1>Iphone 12</h1>
  <p class="price">$1599.99</p>
  <p>Le même téléphone tout les ans</p>
  <p><a href="prepanier.php"><button>Add to Cart</button></a></p>

</div>
<a href ="categories.php">Back</a>

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