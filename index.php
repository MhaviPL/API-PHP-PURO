<?php 

require_once 'src/Config/Database.php';
require_once 'src/Models/Usuario.php';


header("Content-Type: application/json; charset=UTF-8");

//Descobrir qual rota foi chamada
$url = $_GET['url'] ?? '';
$rota = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));

    //EXEMPLO GET /users/id

$recurso = $rota[0] ?? ''; //   /users
$id = $rota[1] ?? ''; //   /id

$metodo = $_SERVER['REQUEST_METHOD'];



?>