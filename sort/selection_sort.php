<?php
/**
 * Эта функция переберет входящий массив, вернув после - отсортированный в порядке возрастания.
 * Скорость выполнения: O(n*log n)
 *
 * @param array $arr
 * @return array
 */
function selectionSort(array $arr)
{
    $size = count($arr);
    if ($size <= 1) {
        return $arr;
    }

    for ($i = 0; $i < $size; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $size; $j++)
        {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j; // Находим среди всех элементов массива - минимальный.
            }
        }
        // Здесь мы меняем первый элемент и минимальный элемент в оставшемся массиве.
        $temp = $arr[$i];
        $arr[$i] =  $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}

$test_array = [5, 18, 4, 1, 22, 99, 2, 3];
$sorted_array = selectionSort($test_array);
print_r($sorted_array);

