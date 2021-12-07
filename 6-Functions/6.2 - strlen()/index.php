<?php

function mijnNaamIsGroot(){
$voornaam="Thomas";
$achternaam="Mooij";
$geheleNaam= $voornaam . $achternaam;
$gehelezin= "Mijn naam is". $geheleNaam;
echo strtoupper($gehelezin);
}

mijnNaamIsGroot();

?>