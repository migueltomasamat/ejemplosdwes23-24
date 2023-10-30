<?php
include_once "./Clases/Soportes/Soporte.php";
include_once "./Clases/Soportes/CintaVideo.php";
include_once "./Clases/Soportes/Juego.php";
include_once "./Clases/Soportes/DVD.php";


use Clases\Soportes\Soporte;
use Clases\Soportes\CintaVideo;
use Clases\Soportes\DVD;
use Clases\Soportes\Juego;

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

