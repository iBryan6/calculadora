<?php
class calculadora{
    public function sumar($a,$b){
        //echo ("La suma de $a y $b = "), $a+$b,"</br>";
        return  $a+$b;
    }
    public function resta($a,$b){
        //echo ("La resta de $a y $b = "), $a-$b,"</br>";
        return  $a-$b;
    }
    public function division($a,$b){
        //echo ("La division de $a y $b = "), $a/$b,"</br>";
        return  $a/$b;
    }
    public function multiplicacion($a,$b){
        //echo ("La multiplicacion de $a y $b = "), $a*$b,"</br>";
        return  $a*$b;
    }
}

$calculadora = new calculadora();
$calculadora->sumar(2,3);
$calculadora->resta(2,3);
$calculadora->division(2,3);
$calculadora->multiplicacion(2,3);
?>

