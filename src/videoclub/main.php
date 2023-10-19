<?php

include_once "./Soporte.php";
include_once "./CintaVideo.php";

use Videoclub\Soporte;
use Videoclub\CintaVideo;

$soporte1= new Soporte("Batman",1);

$soporte1->muestraResumen();
echo "<br>";

$soporte2= new CintaVideo("El resplandor",2,104,6.5);

$soporte2->muestraResumen();