<?php

/**
 * Пример бинарного(двоичного) поиска по упорядоченному массиву
 * Скорость выполнения: O(log n)
 *
 * Основная суть бинарного поиска - отсекать половину элементов на каждой итерации.
 *
 * @param  integer  $needle  Искомое значение
 * @param  array  $haystack  Упорядоченный по возрастанию массив целых чисел
 * @return false|int
 */
function binarySearch(int $needle, array $haystack): bool|int
{
    $low = 0; // Нижняя граница поиска
    $high = count($haystack) - 1; // Верхняя граница поиска

    while ($low <= $high) {
        $middleIndex = round(($low + $high) / 2); // Находим середину. Если количество элементов - нечетное, значит - округляем в меньшую сторону
        $guess = $haystack[$middleIndex];
        if ($guess == $needle) {
            return $middleIndex;
        } elseif ($guess > $needle) {
            $high = $middleIndex - 1;
        } else {
            $low = $middleIndex + 1;
        }
    }
    return false;
}

$test_array = [1, 3, 5, 7, 9, 11, 12, 44, 56, 87, 99];

var_dump(binarySearch(3, $test_array)); // Вернет 1, так как $test_array[1] содержит искомое значение.
var_dump(binarySearch(-1, $test_array)); // Вернет false, так как в массиве нет такого значения.
