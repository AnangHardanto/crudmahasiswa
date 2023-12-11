<?php

class tabung
{
    function volume($jari,$phi,$tinggi)
    {
        $volume = $phi * $jari * $jari * $tinggi;
        echo "Volume tabung adalah : " . $volume;
    }

    function luas($jari,$phi,$tinggi)
    {
        $luas = 2 * $phi * $jari * ($jari + $tinggi);
        echo "Luas Permukaan Tabung adalah : " . $luas;
    }

    function selimut($jari,$phi,$tinggi)
    {
        $selimut = 2 * $phi * $jari * $tinggi;
        echo "Luas Selimut Tabung adalah : " . $selimut;
    }
}