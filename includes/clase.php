<?php

class Vehiculo {

    public $tipoVehiculo;
    public $marca;
    public $modelo;


    function __construct($tipoVehiculo, $marca, $modelo)
    {
        $this -> tipoVehiculo = $tipoVehiculo;
        $this -> marca = $marca;
        $this -> modelo = $modelo;
    }

    public function printVehiculo() {
    echo 'Mi vehiculo es un ' . $this-> tipoVehiculo;
    }

    
}

$coche = new Vehiculo('auto', 'Nissan', '2017');