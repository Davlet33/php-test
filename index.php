<?php


abstract class Worker
{
    public function working()
    {
        return print 'тут';
    }
}


class Work extends Worker
{
    public function __construct()
    {
    }

//Hello
    public function calculate(int $a, int $b): int
    {
        return $a + $b;
    }

    public function work(int $a, int $b): array
    {
        return [$this->calculate($a, $b), $this->working()];
    }
}

$w = new Work();

var_dump($w->work(2, 3));
//$w->work();
