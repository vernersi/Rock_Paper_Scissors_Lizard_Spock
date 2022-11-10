<?php
require_once "Element.php";
require_once "Player.php";

class Game
{
    private Element $first;
    private Element $second;


    public function __construct(Element $first, Element $second)
    {

        $this->first = $first;
        $this->second = $second;
    }

    public function getWinner(): ?Player
    {
        if ($this->first->getName() === $this->second->getName()){
            return null;
        }
        foreach ($this->first->getBeats() as $element) {
            if ($element->getName() === $this->second->getName())
            return $this->first->getPlayer();
        }
    return $this->second->getPlayer();
    }
}