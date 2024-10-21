<?php 

namespace ScreenMatch\Modelo;
abstract class Title implements Avaluating
{

    use Avaliable;
    public function __construct ( 
        private string $name,
        private int $year,
        private Genre $genre,
        private bool $included){
    }
    public function getName(): string{
        return $this->name;
    }

    public function getYear(): int {
        return $this->year;
    }

    public function getGenre(): genre {
        return $this->genre;
    }

    public function getIncluded(): bool {
        return $this->included;
    }

    abstract public function marathonCalculator(): int;
    

}