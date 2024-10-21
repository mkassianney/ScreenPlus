<?php

namespace ScreenMatch\Service;
use ScreenMatch\Modelo\Title;

class Calculator
{
    private int $durationMarathon = 0;

    public function included(Title $title): void
    {
        $this->durationMarathon += $title->marathonCalculator();
    }

    public function duration(): int
    {
        return $this->durationMarathon;
    }
}
