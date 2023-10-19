<?php

include_once "./Soporte.php";
include_once "./CintaVideo.php";
include_once "./Juego.php";
include_once "./DVD.php";

use Videoclub\Soporte;
use Videoclub\CintaVideo;
use Videoclub\Juego;
use Videoclub\DVD;

$soporte1= new Soporte("Batman",1);

$soporte1->muestraResumen();
echo "<br>";

$soporte2= new CintaVideo("El resplandor",2,104,6.5);

$soporte2->muestraResumen();
echo "<br>";


$soporte3 = new Juego("Gran Turistmo",3,4);

$soporte3->muestraResumen();
echo "<br>";
$soporte3->muestraJugadoresPosibles();
echo "<br>";


$soporte4 = new DVD("Animatrix",4,"es-en","Imax",10);

$soporte4->muestraResumen();
echo "<br>";

echo $soporte4;
