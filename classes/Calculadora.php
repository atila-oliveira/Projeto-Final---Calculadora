<?php

class Calculadora{

    private $total;
    private $primeiroNumero;
    private $segundoNumero;

    function __construct(){
        $this -> total = 0;
        $this -> primeiroNumero = 0;
        $this -> segundoNumero = 0;
    }

    public function setPrimeiroNumero($parametroPrimeiroNumero){
        $this -> primeiroNumero = $parametroPrimeiroNumero;
    }
    public function setSegundoNumero($parametroSegundoNumero){
        $this -> segundoNumero = $parametroSegundoNumero;
    }

    public function somar(){
        $this -> total = $this -> primeiroNumero + $this -> segundoNumero;
    }
    public function subtrair(){
        $this -> total = $this -> primeiroNumero - $this -> segundoNumero;
    }
    public function multiplicar(){
        $this -> total = $this -> primeiroNumero * $this -> segundoNumero;
    }
    public function dividir(){
        $this -> total = $this -> primeiroNumero / $this -> segundoNumero;
    }

    public function getTotal(){
        return $this -> total;
    }


}

?>