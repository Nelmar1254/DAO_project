<?php

include_once("db.php");
include_once("dao/carDAO.php");

$carDao = new CarDao($mysqli);
$cars = $carDao->findall();

?>

<h1>Insira um carro</h1>

<form action="process.php" method="POST">
  <div>
   <label for="brand"> Marca do Carro:</label>
   <input type="text" name="brand" placeholder="Insira a marca">
  </div>
 <div>
  <label for="color"> Cor do Carro:</label>
  <input type="text" name="color" placeholder="Insira a cor">
 </div>
  <div>
   <label for="km"> Kilometragem:</label>
   <input type="text" name="km" placeholder="Insira a kilometragem">
  </div>
 <input type="submit" value="salvar">
</form>
<ul>
<?php foreach ($cars as $car):?>
 <li><?= $car->getBrand() ?> - <?= $car->getKm()?> - <?= $car->getColor()?></li>
<?php endforeach;?>

</ul>