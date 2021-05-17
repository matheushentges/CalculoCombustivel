<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

class Calcular
{
    private $km;
    private $consumo;


    public function __construct(){

    }    

    public function setKM($km){
        $this->km = $km;
    }

    public function getKM(){
        echo $this->km . '<br>';
    }

    public function setConsumo($consumo){
        $this->consumo = $consumo;
    }

    public function getConsumo(){
        echo $this->consumo . '<br>';
    }

    public function media(){
        $media =  $this->km / $this->consumo;
        if($media){
            header('Location: index.php?media=' . $media);
        }
    }

}

