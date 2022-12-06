<?php

namespace app\Counter;


use app\Trait\AnimalGeneric;
require_once 'Trait/AnimalGeneric.php';
require_once 'Counter/Counter.php';

class AnimalCounter implements Counter
{
    use AnimalGeneric;

    private array $animalsCounts = [];

    /**
     * считает животных
     * @return void
     */
    public function collect(): void
    {
        foreach ($this->animals as $animal) {
            isset($this->animalsCounts[$animal->getName()]) ?
                $this->animalsCounts[$animal->getName()] += 1 :
                $this->animalsCounts[$animal->getName()] = 1;
        }
    }

    /**
     * возвращает подсчитанное количестко животных
     * @return array
     */
    public function get(): array
    {
        return $this->animalsCounts;
    }
}