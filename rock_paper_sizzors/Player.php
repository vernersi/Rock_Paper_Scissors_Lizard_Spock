<?php
require_once "Game.php";
class Player {

    private string $name;



    public function __construct(string $name){

        $this->name = $name;
    }


    public function getName():string{
        return $this->name;
    }


}