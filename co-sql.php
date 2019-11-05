<?php

$login = 'root';
$pass = 'root';
$host = 'localhost';

try
{

$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host='.$host.';dbname=demo', $login, $pass, $pdo_options);

}

catch (Exception $e)
{
        die('Connexion MySQL impossible.');
}
?>
