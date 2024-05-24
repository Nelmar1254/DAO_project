<?php


include_once("db.php");
include_once("car_dao/car_DAO.php");

$carDao = new CarDao($mysqli);
$brand = $_POST["brand"];
$color = $_POST["color"];
$km = $_POST["km"];

$newcar = new Car();

$newcar->setBrand($brand);
$newcar->setColor($color);
$newcar->setKm($km);

$carDao->create($newcar);

header("location: index.php");