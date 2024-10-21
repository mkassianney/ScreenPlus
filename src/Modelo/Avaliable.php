<?php

namespace ScreenMatch\Modelo;

use Exception;
use Throwable;

trait Avaliable
{

    private array $rate = [];
    public function evaluate(float $rat): void
    {
            if($rat < 0 || $rat > 10){
                throw new Exception("invalid value! the value must be between 0 and 10.");
            }  else {
                $this->rate[] = $rat;
            }

    }
    public function avarage(): float
    {
        $sum = array_sum($this->rate);
        $quantity = count($this->rate);
        return $sum / $quantity;
    }
}