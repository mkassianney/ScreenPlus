<?php

namespace ScreenMatch\Modelo;

interface Avaluating
{
    public function evaluate(float $rat): void;
    public function avarage(): float;
}