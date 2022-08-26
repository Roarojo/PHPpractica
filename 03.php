<?php
include 'recursos/index.php';

// Atributos de una clase
class Empleado { 
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

}

$otro = new Empleado;

$otro->nombre = "Juan";
$otro->apellido = "De la torre";
$otro->departamento = "Finanzas";

echo "<pre>";
var_dump($otro);
echo "</pre>";


$empleado2 = new Empleado;

$empleado2->nombre = "Karen";
$empleado2->apellido = "Perez";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";