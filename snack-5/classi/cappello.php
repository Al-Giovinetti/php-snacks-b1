<?php
include_once __DIR__ ."/indumento.php";

class Cappello extends Indumento{
    //propietà
    public $tesa;

    //costruttore
    function __construct($_tesa){
        $this->tesa = $_tesa;
    }    
}

?>