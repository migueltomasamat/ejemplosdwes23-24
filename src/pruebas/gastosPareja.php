<?php

$titulo = "Calculo de Gastos";
include ("plantilla/encabezado.php");

include_once("pruebaFunciones.php");

$gastosCitas[0] = ['Inma'=>200.45];
$gastosCitas[1] = ['Juan'=>10.15];
$gastosCitas[2] = ['Inma'=>315.45];

$resultado=gastosCompartidos($gastosCitas);

echo "<hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">"


foreach ($resultado as $clave=>$valor){
    if ($valor>0){
        echo "El integrante de la pareja llamado $clave debe ingresar $valor<br>";
    }else{
        echo "El integrante de la pareja llamado $clave debe pagar ".abs($valor)."<br>";
    }
}

include ("plantilla/pie.php");