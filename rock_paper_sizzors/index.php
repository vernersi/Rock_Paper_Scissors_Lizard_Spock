<?php
/*
    Rock crushes lizard
    Rock crushes scissors
    Paper covers rock
    Paper disproves Spock
    Scissors cuts paper
    Scissors decapitates lizard
    Lizard poisons Spock
    Lizard eats paper
    Spock smashes scissors
    Spock vaporizes rock
*/


require_once "Element.php";
require_once "Game.php";
require_once "Player.php";

    $rock = new Element('Rock');
    $paper = new Element('Paper');
    $scissors = new Element('Scissors');
    $lizard = new Element('Lizard');
    $spock = new Element('Spock');

    $rock->setBeats($scissors); $rock->setBeats($lizard);

    $paper->setBeats($rock); $paper->setBeats($spock);

    $scissors->setBeats($paper); $scissors->setBeats($lizard);

    $lizard->setBeats($spock); $lizard->setBeats($paper);

    $spock->setBeats($scissors); $spock->setBeats($rock);


$elements = [
    $rock,
    $paper,
    $scissors,
    $lizard,
    $spock
    ];



$playerName = (string) readline('Enter Your Name :');
foreach ($elements as $key=>$element){
    echo "[$key] {$element->getName()}". PHP_EOL;
}
$player = new Player($playerName);
$selection =(int) readline('Enter element : ');
$selectedElement = $elements[$selection];
$selectedElement->setPlayer($player);

$bot= new Player('Bot');
$opponentElement = $elements[array_rand($elements)];
$opponentElement->setPlayer($bot);


$game = new Game($selectedElement, $opponentElement);

echo $player->getName().' | '. $selectedElement->getName().' VS '.$opponentElement->getName().' | '.$bot->getName().PHP_EOL;

$winner = $game->getWinner();
if ($winner === null) {
    echo "The game was tie";
    exit;
}
echo "The Winner is : ".$winner->getName(). PHP_EOL;

