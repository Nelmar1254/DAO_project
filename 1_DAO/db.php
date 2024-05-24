<?php

$usuario = 'root'; //usuario do servidor
$senha = ''; // senha do servidor
$database = 'login'; // nome do banco de dados
$host = 'localhost'; //nome do servidor

 //Criando conexão
$mysqli = new PDO($host, $usuario, $senha);
 //Verificando conexão, se não conectar a operação morre
