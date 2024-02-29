<?php
require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("shaun");
echo "Name: " . $sheep->name . "</br>";
echo "Legs: " . $sheep->legs  . "</br>";
echo "Cold blooded: " . $sheep->cold_blooded  . "</br>". "</br>";

$kodok = new Frog("buduk");
echo "Name: " . $kodok->name . "</br>";
echo "Legs: " . $kodok->legs  . "</br>";
echo "Cold blooded: " . $kodok->cold_blooded  . "</br>". "</br>";
$kodok->jump(); // "Jump: Hop Hop"

$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "</br>";
echo "Legs: " . $sungokong->legs  . "</br>";
echo "Cold blooded: " . $sungokong->cold_blooded  . "</br>";
$sungokong->yell(); // "Yell: Auooo"