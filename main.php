<?php

include __DIR__ .  '/Core/core.php';

$array = include 'Core/trees.php';

//Инициализируем исходный массив деревьев
foreach ($array as $key => $value) {
    foreach ($value as $item) {
        Trees::set([$key, $item]);
    }
}

//Добавляем 2 яблока
(new AddTrees())->add(2,'apple');

//Выводим количество собранного урожая
print_r((new Sum())->sumAll());
echo PHP_EOL;

//выводим вес собранного урожая яблок и груш
print_r((new Sum())->sumWithWeight());
