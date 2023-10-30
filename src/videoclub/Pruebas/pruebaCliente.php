<?php

include_once "../Clases/Cliente.php";

use Clases\Cliente;

$cliente1 = new Cliente("1","Inmaculada",5);

$cliente1->muestraResumen();
