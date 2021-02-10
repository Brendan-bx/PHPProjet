<?php
require_once("header.php")
?>
<a href ="categories.php">Back</a>


<div class="card">
  <img src="/img/Burger.png" alt="Burger" style="width:100%">
  <h1>Burger simple</h1>
  <p class="price">$15.99</p>
  <p>Burger pour ceux qui ont la flemme</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="/img/Frites.png" alt="Frites" style="width:100%">
  <h1>Frites</h1>
  <p class="price">$19.99</p>
  <p>Pour rajouter un supplément au burger ;)</p>
  <p><button>Add to Cart</button></p>
</div>

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