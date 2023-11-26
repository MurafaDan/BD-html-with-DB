<?php
$hostname = 'localhost'; //adresa
$username = 'root';
$password = ''; //parola daca este nevoie
$database = 'poveste1'; //baza de date

//conectare la server
$link = mysqli_connect($hostname, $username, $password, $database);


//verifica conexiunea
if (!$link)
{
    die("Nu se poate conecta la server: ".mysqli_connect_error());
}
?>