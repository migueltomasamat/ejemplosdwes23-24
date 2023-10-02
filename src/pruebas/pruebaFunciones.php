<?php

function gastosCompartidos(array $gastos):array{

    $pareja=sacarEtiquetas($gastos);
    print_r($pareja);

    return [];
}

function sacarEtiquetas(array $coleccion):array{
    $etiquetas=[];
    foreach ($coleccion as $pagos){
        foreach ($pagos as $clave=>$valor){
            if (!in_array($clave,$etiquetas)){
                $etiquetas[]=$clave;
            }
        }
    }

    return $etiquetas;
}

$gastosCitas[0] = ['Inma'=>200.45];
$gastosCitas[1] = ['Juan'=>10.15];
$gastosCitas[2] = ['Inma'=>315.45];

gastosCompartidos($gastosCitas);
