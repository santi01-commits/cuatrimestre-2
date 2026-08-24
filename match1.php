<?php

$a=9;

$x=10;
$y=9;
$z=7;

$resultado = match($a){
    $x,$y => "Valor igual a X o Y",
    $z => "Valor igual a Z",
    default => "No coincide con ninguna variable"
};

echo $resultado;