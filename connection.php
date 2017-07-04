<?php
/**
 * Created by PhpStorm.
 * User: akoi-aka
 * Date: 04/07/2017
 * Time: 13:34
 */
$serveur="localhost";
$dbname="colyseum";
$login="akoi";
$password="ok";

try{
    $bdd = new PDO("mysql:host=$serveur;dbname=$dbname",$login, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    echo "";
}
catch(PDOException $e){
    echo "Connexion impossible" . $e->getMessage();
}
?>