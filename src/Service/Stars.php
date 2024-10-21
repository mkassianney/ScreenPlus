<?php

namespace ScreenMatch\Service;

use ScreenMatch\Modelo\Avaluating;
use ScreenMatch\Modelo\Title;
use Throwable;

class Stars 
{
   
    public function convert(Avaluating $ava): float{
        try{
            $rat = $ava->avarage();
            return round($rat) / 2;

        } catch (Throwable $e){
            echo $e->getMessage() . PHP_EOL;
            return 0;
        }
    }
}