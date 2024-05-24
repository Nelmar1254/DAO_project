<?php


include_once("models/Car.php");


class CarDao implements CarDaointerface{

    private $mysqli;
    
    public function __construct(PDO $mysqli)
    {
        $this->mysqli=$mysqli;
    }

    public function findall(){
       $cars = [];
       $stmt= $this->mysqli->query("SELECT * FROM carros");
       $data = $stmt->fetchAll();

       foreach ($data as $item) {
        
        $car = new Car();
        $car->setId($item["id"]);
        $car->setBrand($item["brand"]);
        $car->setKm($item["km"]);
        $car->setColor($item["color"]);

        $cars[] = $car;
       }
       return $cars;
    }

    public function create(Car $car){
     
        $stmt= $this->mysqli->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand,:km,:color)");
        $stmt->bindParam(":brand", $car->getBrand());
        $stmt->bindParam(":brand", $car->getKm());
        $stmt->bindParam(":brand", $car->getColor());

        $stmt->execute();
    }

    
}