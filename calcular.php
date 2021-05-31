<?php
    require_once('classes/Calculadora.php');

    $primeiroNumero = $_POST['primeiroNumero'];
    $segundoNumero = $_POST['segundoNumero'];
    $operacao = $_POST['operacao'];

    $calculadora = new Calculadora();
    $calculadora->setPrimeiroNumero($primeiroNumero);
    $calculadora->setSegundoNumero($segundoNumero);

    
    switch($operacao){
        case 'somar':
            $calculadora->somar();
            break;
        case 'subtrair':
            $calculadora->subtrair();
            break;
        case 'multiplicar':
            $calculadora->multiplicar();
            break;
        case 'dividir':
            $calculadora->dividir();
            break;
    }

    echo $calculadora->getTotal();
?>