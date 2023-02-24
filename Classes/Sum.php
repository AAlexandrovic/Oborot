<?php

include __DIR__ . '/../Core/core.php';

/**
 * Суммирует и выводит значения
 *
 * @inheritDoc
 */
class Sum extends Trees
{

    /**
     * Получаем список деревьев в виде массива
     *
     * @return array
     */
    public function getAll(): array
    {
        return self::$array;
    }

    /**
     * Суммирует все значения урожая деревьев из списка
     *
     * @return array
     */
    public function sumAll(): array
    {
        $array = $this->getAll();

        $sum1 = 0;
        $sum2 = 0;

        foreach ($array as $key => $value) {
            foreach ($value as $item) {
                if ($key == 'apples') {
                    $sum1 += $item;
                } else {
                    $sum2 += $item;
                }
            }
        }

        return ['Всего собрано яблок' => $sum1, 'Всего собрано груш' => $sum2];
    }

    /**
     * Выводит вес собранного урожая груш и яблок
     *
     * @return array
     */
    public function sumWithWeight(): array
    {
        $array = $this->getAll();
        $weight1 = 0;
        $weight2 = 0;
        foreach ($array as $key => $value) {
            foreach ($value as $item) {
                if ($key == 'apples') {
                    $weight1 += $item * rand(150, 180);
                } else {
                    $weight2 += $item * rand(130, 170);
                }
            }
        }

        return ['Удельный вес собранных яблок в кг.' => $weight1 / 100, 'Удельный вес собранных груш в кг.' => $weight2 / 100];
    }
}
