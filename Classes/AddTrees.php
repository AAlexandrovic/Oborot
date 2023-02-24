<?php

include __DIR__ . '/../Core/core.php';

/** Добавляет деревья в список */
class AddTrees extends Trees
{

    /**
     * В зависимости от указанных значений $count и $type добавляет выбранное количество и тип дереьев
     *
     * @param int $count
     * @param string $type
     * @return void
     */
    public function add(int $count, string $type): void
    {
        for ($i = 1; $i <= $count; $i++) {
            if ($type == 'apple') {
                Trees::set(Trees::apple());
            } elseif ($type == 'pear') {
                Trees::set(Trees::pear());
            }
        }
    }
}
