<?php 

namespace ScreenMatch\Modelo;
use ScreenMatch\Modelo\Title;
use ScreenMatch\Modelo\Genre;
use ScreenMatch\Modelo\Avaluating;
use ScreenMatch\Service\Calculator;

class Movie extends Title
{

    public function __construct (string $name, int $year, Genre $genre, bool $included, private int $duration)
    {
        parent::__construct($name,$year,$genre,$included);
        $this->duration - $duration;
    }

    #[\Override]
    public function marathonCalculator(): int {
        return $this->duration;
    }

}