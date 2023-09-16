<?php

namespace CalculatorViaInterface\Operations;

interface Calculable
{
    public function check($a, $b);

    /**
     * @param int|float $a
     * @param int|float $b
     * @return mixed
     */
    public function calculate($a, $b);
}