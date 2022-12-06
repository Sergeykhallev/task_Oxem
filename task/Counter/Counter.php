<?php

namespace app\Counter;

interface Counter
{
    /**
     * собирает количество элементов
     * @return void
     */
    public function collect(): void;

    /**
     * возвращает собранные элементы
     * @return array
     */
    public function get(): array;
}