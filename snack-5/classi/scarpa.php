<?php
include_once __DIR__ ."/indumento.php";

class Scarpa extends Indumento{
    //propietà
    public $tacco;

    //costruttore
    function __construct($_tacco){
        $this->tacco = $_tacco;
    }


    
}

?>