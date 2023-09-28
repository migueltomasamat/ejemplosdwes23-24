<?php
    $variable1 = [];

    print_r($variable1);

    $variable1['pagoAgosto']=45;

    print_r($variable1);

    $variable1['pagoJulio']=4;

    echo "<br>";

    print_r($variable1);

    /*for ($i=0;$i<13;$i++){
        echo $variable1[$i]."<br>";
    }*/

    foreach ($variable1 as $elemento ){
        echo $elemento."<br>";
    }

    echo "<br>";

    foreach ($variable1 as $clave=>$valor){
        echo "La posición $clave tiene el valor $valor<br>";
    }

    $contactos['Sandra']=array(
        'apellidos'=>'Deltell Torregrosa',
        'edad'=>40,
        'salario'=>2000.56,
        'asignaturas'=>array('LEMA','Base de datos','Redes')
    );

    $contactos['Inma']=[
        'apellidos'=>'Climent',
        'edad'=>37,
        'direccion'=>'Los Pinos 25',
        'asignaturas'=>['FOL','EIE']
    ];

    $contactos['Juanjo']=47;

    //var_dump($contactos);


    echo "<br><br><br><br>";

    foreach ($contactos as $clave=>$valor){
        echo "<br>La posición $clave: ";
        if (is_array($valor)){
            foreach($valor as $claveInterna=>$valorInterno){
                if (is_array($valorInterno)){
                    echo "La clave es: $claveInterna";
                    foreach ($valorInterno as $asignatura){
                        echo "$asignatura";
                    }
                }else{
                    echo "$claveInterna -------- $valorInterno<br>";
                }

            }
        }else{
            echo "$valor";
        }
    }

