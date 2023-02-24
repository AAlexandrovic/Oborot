<?php

/** Класс реестр деревьев*/
Class Trees
{
    /** @var array массив собирает список деревьев */
    protected static $array = [];

    /**
     * Возвращет модель яблони
     *
     * @return array
     */
    public static function apple(): array
    {
        return ['apples', rand(40,50)];
    }

    /**
     * Возвращает модель груши
     *
     * @return array
     */
    public static function pear(): array
    {
        return ['pears' , rand(0,20)];
    }

    /**
     * Добавляет модель яблони или груши в массив деревеьев, так-же создаёт уникальный  номер для каждого дерева
     *
     * @param array $tree
     * @return void
     */
    public static function set(array $tree): void
    {
        self::$array[$key = $tree[0]][substr(uniqid(), -4)] = $tree[1];

    }
}
