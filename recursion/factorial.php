<?php

/**
 * Функция, которая расчитает факториал.
 *
 * @param  int  $x
 * @return float|int
 */
function baseFactorial(int $x)
{
    if ($x <= 1) {
        return 1;
    }

    $result = 1;
    for ($i = 2; $i <= $x; $i++) {
        $result = $result * $i;
    }

    return $result;
}

/**
 * Эта функция расчитает факториал и использует рекурсию.
 * Выглядит более лакончично.
 *
 * @param  int  $x
 * @return float|int
 */
function recursiveFactorial(int $x)
{
    if ($x == 1) {
        return 1;
    } else {
        return $x * recursiveFactorial($x - 1);
    }
}

$test = 5; //!5 = 5 * 4 * 3 * 2 * 1 = 120
var_dump(baseFactorial($test));
var_dump(recursiveFactorial($test));
