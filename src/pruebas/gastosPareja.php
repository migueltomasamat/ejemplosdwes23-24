<?php

$titulo = "Calculo de Gastos";
include ("plantilla/encabezado.php");

$diapositivas=[
    [
        'titulo'=>'Primera diapositiva',
        'subtitulo'=>'Primera prueba de diapositivas',
        'enlace'=>'https://iespacomolla.es',
        'desc_enlace'=>'Web del instituto'
    ],[
        'titulo'=>'Segunda diapositiva',
        'subtitulo'=>'Segunda prueba de diapositivas',
        'enlace'=>'https://correo.iespacomolla.es',
        'desc_enlace'=>'Correo del instituto'
    ]
];

include("plantilla/slider.php");

require_once("pruebaFunciones.php");

$gastosCitas[0] = ['Inma'=>200.45];
$gastosCitas[1] = ['Juan'=>10.15];
$gastosCitas[2] = ['Inma'=>315.45];

$resultado=gastosCompartidos($gastosCitas);

$mensajes=[];

foreach ($resultado as $clave=>$valor){
    if ($valor>0){
        $mensajes=["El integrante de la pareja llamado $clave debe ingresar $valor"];
    }else{
        $mensajes=["El integrante de la pareja llamado $clave debe pagar ".abs($valor)];
        $mensajes[]="El integrante $clave es un cabrón";
    }
}
$encabezado ="El resultado de la repartición de gastos a pachas es:";

include("plantilla/mensaje.php");

include ("plantilla/pie.php");