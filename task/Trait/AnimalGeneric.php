<?php

namespace app\Trait;

use app\Models\Animal;

trait AnimalGeneric
{
    /**
     * @var Animal[]
     */
    private array $animals = [];

    /**
     * @param Animal $animal
     * @return void
     */
    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }
}