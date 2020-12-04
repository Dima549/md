<?php

namespace dimitriu;

use core\EquationInterface;

class QuadraticEquation extends LinearEquation implements EquationInterface
{

    protected function Discriminant($a, $b, $c)
    {
        return $b * $b - 4 * $a * $c;
    }

    public function solve($a, $b, $c)
    {
        if ($a == 0)
        {
            return $this->LinearEquation($b, $c);
        }

        $d = $this->Discriminant($a, $b, $c);

        if ($d == 0)
        {
            return $this->x = ($b * (-1)) / (2 * $a);
        }

        if ($d < 0)
        {
            throw new \Error('Equation doesn`t exist');
        }

        return $this->x = [($b * (-1) - sqrt($d)) / (2 * $a), ($b * (-1) + sqrt($d)) / (2 * $a)];
    }

}