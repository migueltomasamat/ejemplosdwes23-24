<?php

namespace Clases;

use Clases\Soportes\CintaVideo;
use Clases\Soportes\DVD;
use Clases\Soportes\Juego;
use Clases\Soportes\Soporte;

class Videoclub
{
    private array $productos;
    private int $numProductos;
    private array $socios;
    private int $numSocios;

    public function __construct(){
        $this->socios=array();
        $this->productos=array();
        $this->numSocios=count($this->socios);
        $this->numProductos=count($this->productos);

    }

    private function incluirProducto(Soporte $soporte):self{
        $this->productos[]=$soporte;
        return $this;
    }
    public function incluirCintaVideo(string $titulo,float $precio, int $duracion):self{
        $cintaVideo = new CintaVideo($titulo,precio:$precio,duracion: $duracion,numero: $this->numProductos);
        $this->incluirProducto($cintaVideo);
        return $this;
    }

    public function incluirDVD(string $titulo, float $precio, string $idiomas, string $formatPantalla):self{
        $dvd = new DVD($titulo,
            idiomas: $idiomas,
            formatPantalla: $formatPantalla,
            precio: $precio,
            numero: $this->numProductos);
        $this->incluirProducto($dvd);
        return $this;
    }

    public function incluirJuego(string $titulo, float $precio, string $consola, int $maxJ, int $minJ):self{
        $juego = new Juego($titulo,$this->numProductos,$maxJ,$minJ,$consola,$precio);
        $this->incluirProducto($juego);
        return $this;
    }

    public function incluirSocio(string $nombre, int $numAlquileresConcurrentes=3):self{
        $socio = new Cliente($this->numSocios,$nombre,$numAlquileresConcurrentes);
        $this->socios[]=$socio;
        $this->numSocios=count($this->socios);
        return $this;
    }
}