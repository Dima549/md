<?php

namespace dimitriu;



class LinearEquation
{
    public function LinearEquation($a, $b)
    {
        if ($a == 0) {
            throw new \Error('Equation doesn`t exist');
        }

        return $this->x = [$b * (-1) / $a];
    }

    protected $x;
}