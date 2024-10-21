<?php

require_once 'autoload.php';

use ScreenMatch\Modelo\Title;
use ScreenMatch\Modelo\Movie;
use ScreenMatch\Modelo\Series;
use ScreenMatch\Modelo\Genre;
use ScreenMatch\Modelo\Avaliable;
use ScreenMatch\Service\Stars;
use ScreenMatch\Service\Calculator;

$serie = new Series('Lost', 2009, Genre::Acao, true, 10, 20, 
30);
$movie = new Movie('Vingadores', 2015, Genre::Acao, true, 180);

var_dump($movie->getName());
var_dump($serie->getName());
echo $serie->marathonCalculator() . PHP_EOL;
echo $movie->marathonCalculator() .PHP_EOL;

$serie->evaluate(9);
$serie->evaluate(4);
$serie->evaluate(10);
$serie->evaluate(10);
echo $serie->avarage() . PHP_EOL;
$star = new Stars();
echo $star->convert($serie) . PHP_EOL;
$includ = new Calculator();
