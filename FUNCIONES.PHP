<?php

function saludo($nombre){
    return "Hola, mi nombre es: $nombre ";
}

echo saludo("Nicole ");

$usuario="Ashley";
echo saludo($usuario);

echo saludo($nombre="Carlos");