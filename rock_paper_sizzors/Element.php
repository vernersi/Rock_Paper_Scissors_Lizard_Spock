<?php

class Element {

    private string $name;
    private Player $player;
    private array $beats;

    public function __construct(string $name)
    {

        $this->name = $name;
    }

    public function setPlayer(Player $player){
        $this->player=$player;
    }
    public function  getPlayer ():Player{
        return $this->player;
    }

    public function getName(): string{
        return $this->name;
    }

    public function setBeats(Element  $element){
        $this->beats []= $element;
    }

    public function getBeats():array{
        return $this->beats;
    }

}