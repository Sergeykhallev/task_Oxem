<?php

namespace app;

use app\Models\Animal;
use app\Counter\Counter;

include 'Models/Animal.php';

class Farm
{
    private Counter $animalCounter;
    private Counter $productCounter;

    public function __construct(Counter $animalCounter, Counter $productCounter)
    {
        $this->animalCounter = $animalCounter;
        $this->productCounter = $productCounter;
    }

    /**
     * добавляет животных в подсчет
     * @param Animal $animal
     * @param int $count
     */
    public function addAnimals(Animal $animal, int $count = 1): void
    {
        for ($i = 0; $i < $count; $i++) {
            $this->animalCounter->addAnimal($animal->getNewInstance());
            $this->productCounter->addAnimal($animal->getNewInstance());
        }
        $this->animalCounter->collect();
    }

    /**
     * собирает количество продуктов n раз
     * @param int $times
     * @return void
     */
    public function collect(int $times = 1): void
    {
        for ($i = 0; $i < $times; $i++){
            $this->productCounter->collect();
        }
    }

    public function printAnimalsCounts(): void
    {
        echo "Кол-во животных на данный момент: \n";
        foreach ($this->animalCounter->get() as $animalName => $animalCount)
        {
            echo "$animalName: $animalCount \n";
        }
    }

    public function printTotalProducts(): void
    {
        echo "Кол-во продуктов на данный момент: \n";
        foreach ($this->productCounter->get() as $productName => $productCount)
        {
            echo "$productName: $productCount \n";
        }
    }
}