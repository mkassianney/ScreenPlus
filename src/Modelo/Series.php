<?php 

namespace ScreenMatch\Modelo;
use ScreenMatch\Modelo\Title;
use ScreenMatch\Modelo\Genre;
use ScreenMatch\Service\Calculator;

class Series extends Title
{

    public function __construct (string $name, int $year, Genre $genre, bool $included, private int $temps, 
    private int $epsPerTemp,private int $minPerEps)
    {
        parent::__construct($name,$year,$genre,$included);

    }

    #[\Override]
    public function marathonCalculator(): int {
        return $this->temps * $this->epsPerTemp * $this->minPerEps;
    }

}