<?php

class A
{
    public function LinearEquation($a, $b)
    {
        if ($a == 0)
        {
            throw new Exception('Equation doesn`t exist');
        }

        return  $this->x = $b * (-1) / $a;
    }

    protected $x;
}

class B extends A
{

    protected function Discriminant($a, $b, $c)
    {
        return $b * $b - 4 * $a * $c;
    }

    public function QuadraticEquation($a, $b, $c)
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
            throw new Exception('Equation doesn`t exist');
        }

        return $this->x = [($b * (-1) - sqrt($d)) / (2 * $a), ($b * (-1) + sqrt($d)) / (2 * $a)];
    }

}

$equation1 = new A();
$equation2 = new B();
echo $equation1->LinearEquation(5, 6) . "\n";
var_dump($equation2->QuadraticEquation(4.5, 12, 4));
echo $equation2->QuadraticEquation(0, 4, 7) . "\n";