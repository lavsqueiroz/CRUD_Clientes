<?php

//exibe qualquer erro que ocorrer
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//conecta ao banco de dados
$servername = "localhost";
$database = "clientes";
$username="root";
$password="";
$conexao=mysqli_connect($servername, $username, $password, $database);


?>