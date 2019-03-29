<?php

const x = 1;
const y = 2;
const emp = 3;
$barco = 10; 


//declarar 2 arrays para cada tabla de cada jugador
$tablero = array();
$tablero [] = array (3,3,3,3,3,3,3,3,3,3);
$tablero [] = array (3,3,3,3,3,3,3,3,3,3);
$tablero [] = array (3,3,3,3,3,3,3,3,3,3);
$tablero [] = array (3,3,3,3,3,3,3,3,3,3);
$tablero [] = array (3,3,3,3,3,3,3,3,3,3);
$tablero [] = array (3,3,3,3,3,3,3,3,3,3);
$tablero [] = array (3,3,3,3,3,3,3,3,3,3);
$tablero [] = array (3,3,3,3,3,3,3,3,3,3);
$tablero [] = array (3,3,3,3,3,3,3,3,3,3);
$tablero [] = array (3,3,3,3,3,3,3,3,3,3);


function lleno($tablero)
{
    foreach($tablero as $fila)
    {
        foreach($fila as $position)
        {
            if ($position == 3)
            {
                return false;
            }
        }
    }
}


function setBarcos()
{
    for($contbar = 10; $contbar <= 1; $contbar --)
    {
        //un rand para colocar los barcos
    }
}


function buscarPositionAzar()
    {
        return array (
            rand(0,9),
            rand(0,9)
        );
    }


function ganador($barco)
{
    if ($barco == 0)
    {
        echo 'Has ganado';
        die;
    }
}

$jugadoractivo = y;

while(!ganador($tablero))
{
    $position = buscarPositionAzar();
    if($jugadoractivo = 1)
    {
        $jugadoractivo = x;
    } else{
        $jugadoractivo = y;
    }
}

//definir la colocacion de los barcos   (FALTA)
//despues de que un jugador juegue, que le toque el turno al otro (INCOMPLETO)
//checkear si el barco fue hundido (FALTA)
//mostrar al ganador, detener el juego en caso de un ganador (INCOMPLETO)
