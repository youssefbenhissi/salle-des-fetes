<?php

class connexion
{public $cnx;
function  __construct()
{
$servername = "localhost";
$username = "root";
$password = "";
$database= "projetweb";
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password, $pdo_options);
$this->cnx=$conn;
}}

?>
