<?php

ini_set('memory_limit','2048M');

if (isset($_GET['cantidad'])){
    $totalParametro = $_GET['cantidad'];
}else{
    $totalParametro = 500.50;
}

$arrayProductos=[
    'cafe'=>1,
    'tostada'=>1.50,
    'coca-cola'=>2,
    'cerveza'=>2,
    'bravas'=>5,
    'ensaladilla'=>7.5,
    'pan'=>1,
    'bocadillo'=>7.5
];

function generarTickets(array $productos,float $total, int $tipoTicket=1):array{



   return [];
}
$set = [];
function printPowerSet(array &$s, array &$set)
{
    // si hemos considerado todos los elementos
    $n = count($s);

    if ($n == 0)
    {
        //$valor[]=$set;
        return;
    }

    // considera el n'ésimo elemento

    $set[] = $s[$n - 1];
    printPowerSet($s, $set);

    array_pop($set);                    // retractarse

    // o no considerar el n'ésimo elemento
    printPowerSet($s, $set);

}

function findPowerSetBinary(array $s)
{
    $combinaciones=[];// `N` almacena el número total de subconjuntos
    $n = pow(2, count($s));

    // generar cada subconjunto uno por uno
    for ($i = 0; $i < $n; $i++)
    {
        $input=[];
        // revisa cada bit de `i`
        for ($j = 0; $j < count($s); $j++)
        {
            // si se establece el j-ésimo bit de `i`, imprime `S[j]`
            if (($i & (1<< $j))!=0) {
                $input[]=$s[$j];
            }
        }
        $combinaciones[]= $input;

    }
    return $combinaciones;

}

$elementos=array_values($arrayProductos);
var_dump($elementos);
//$permutaciones = pc_permute(array_values($arrayProductos));
/*printPowerSet($elementos, $set);*/
$combinaciones= findPowerSetBinary($elementos);
//var_dump($combinaciones);
$posiblesPrecios = [];
foreach ($combinaciones as $valor){
    $posiblesPrecios[] = array_sum(array_unique($valor));
}

var_dump($posiblesPrecios);

/*$salida= explode("\n",$permutaciones);
var_dump($salida);
/*foreach ($salida as $clave => $value){
    $salida[$clave]=array_sum(array_slice(explode(" ", $value),1));
    $salida = array_unique($salida);
}
var_dump($salida);*/