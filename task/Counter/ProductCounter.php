<?php

namespace app\Counter;

use app\Trait\AnimalGeneric;

class ProductCounter implements Counter
{
    use AnimalGeneric;

    private array $productsCounts = [];

    /**
     * собирает продукцию за количесво раз
     * @return void
     */
    public function collect(): void
    {
        foreach ($this->animals as $animal) {
            isset($this->productsCounts[$animal->getProductName()]) ?
                $this->productsCounts[$animal->getProductName()] += $animal->getProductCount() :
                $this->productsCounts[$animal->getProductName()] = $animal->getProductCount();
        }
    }

    /**
     * возвращяет подсчитанное количество продуктов
     * @return array
     */
    public function get(): array
    {
        return $this->productsCounts;
    }
}