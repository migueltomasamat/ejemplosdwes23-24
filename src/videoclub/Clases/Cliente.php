<?php

namespace Clases;

include_once "./Soportes/Soporte.php";

use Clases\Soportes\Soporte;

class Cliente
{
    public string $nombre;
    private int $numero;

    private array $soportesAlquilados;

    private int $numSoportesAlquilados;

    private int $maxAlquilerConcurrente;

    public function __construct(int $numero, string $nombre, int $maxAlquilerConcurrente=3)
    {
        $this->nombre=$nombre;
        $this->numero=$numero;
        $this->soportesAlquilados=[];
        $this->numSoportesAlquilados=count($this->soportesAlquilados);
        $this->maxAlquilerConcurrente=$maxAlquilerConcurrente;

    }

    public function alquilar(Soporte $soporte):self{

        if($this->tieneAlquilado($soporte)){
            echo "No se puede alquilar un soporte que ya está alquilado";
        }elseif (!($this->numSoportesAlquilados<$this->maxAlquilerConcurrente)){
            echo "Máximo número de soportes concurrentes alcanzado";
        }else{
            $this->soportesAlquilados[]=$soporte;
            $this->numSoportesAlquilados=count($this->soportesAlquilados);
        }

        return $this;
    }

    public function tieneAlquilado(Soporte $soporte):bool{
        foreach ($this->soportesAlquilados as $soporteAlquilado){
            if ($soporteAlquilado->getNumero()==$soporte->getNumero()){
                return true;
            }
        }
        return false;
    }

    public function devolver(int $numSoporte):self{

        $soporteAlquilado = $this->buscarAlquilado($numSoporte);
        if ($soporteAlquilado){
            unset($this->soportesAlquilados[array_search($soporteAlquilado)]);
            $this->soportesAlquilados=array_values($this->soportesAlquilados);
        }else{
            echo "No se puede retornar un soporte que no está alquilado";
        }
        return $this;

    }

    public function listaAlquileres():self{
        foreach($this->soportesAlquilados as $soporte){
            $soporte->muestraResumen();
        }
        return $this;
    }

    public function muestraResumen():self{
        echo "Cliente: $this->nombre<br>".
            "Numero: $this->numero<br>".
            "Número máximo de alquileres $this->maxAlquilerConcurrente<br>".
            "Número de soportes alquilados $this->numSoportesAlquilados<br>";
        $this->listaAlquileres();
        return $this;
    }

    public function __toString(): string
    {
        return "Cliente: $this->nombre<br>".
        "Numero: $this->numero<br>".
        "Número máximo de alquileres $this->maxAlquilerConcurrente<br>".
        "Número de soportes alquilados $this->numSoportesAlquilados<br>".
            $this->listaAlquileres();
    }

    private function buscarAlquilado(int $numSoporte):Soporte|bool{
        foreach ($this->soportesAlquilados as $soporteAlquilado){
            if ($soporteAlquilado->getNumero()===$numSoporte){
                return $soporteAlquilado;
            }
        }
        return false;
    }


}