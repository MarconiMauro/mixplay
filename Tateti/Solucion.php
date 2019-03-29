<?php

const vacio = 3;
const circulo = 1;
const cruz = 2;

$tablero = array();
$tablero [] = array(3,3,3);
$tablero [] = array(3,3,3);
$tablero [] = array(3,3,3);

function lleno($tablero) {
    foreach ($tablero as $fila) {
        foreach ($fila as $position) {
            if (position == 3) {
                return false;
            }
        }
    }
}

function buscarPosicionAzar() {
    return array(
        rand(0,2),
        rand(0,2)
    );
}

function ganador($ganador) {
    if($tablero[0][0] == $tablero[0][1] and $tablero[0][1] == $tablero [0][2]) 
    {
        return true;
    }
    if($tablero[1][0] == $tablero[1][1] and $tablero[1][1] == $tablero [1][2]) 
    {
        return true;
    }
    if($tablero[2][0] == $tablero[2][1] and $tablero[2][1] == $tablero [2][2]) 
    {
        return true;
    }
    if($tablero[0][0] == $tablero[1][0] and $tablero[1][0] == $tablero [2][0]) 
    {
        return true;
    }
    if($tablero[0][1] == $tablero[1][1] and $tablero[1][1] == $tablero [2][1]) 
    {
        return true;
    }
    if($tablero[0][2] == $tablero[1][2] and $tablero[1][2] == $tablero [2][2]) 
    {
        return true;
    }
    return false;
}
$jugadoractivo = cruz;

while (!lleno($tablero) && !ganador($tablero)){
    $position = buscarPosicionAzar();
}
if ($jugadoractivo == cruz) {
    $jugadoractivo = circulo;
} else {
    $jugadoractivo = cruz;
}


foreach($tablero as $fila) {
    echo $fila[0] . ' - ' .  $fila[1] .  ' - ' . $fila [2] . "\n" ;
} 
