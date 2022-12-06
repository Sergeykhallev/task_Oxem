<?php

namespace app\Models;

abstract class Animal
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * название животного
     * @var string
     */
    protected string $name;

    /**
     * название продукта
     * @var string
     */
    protected string $productName;

    public function __construct()
    {
        $this->id = substr(md5(random_bytes(5)), 0, 6);
    }

    /**
     * возвращает название животного
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * возвращает название продукта
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * возвращает новую сущность дочернего класса
     * @return $this
     */
    public function getNewInstance(): static
    {
        return new static();
    }

    /**
     * возвращает количество собранных продуктов
     * @return int
     */
    abstract public function getProductCount(): int;
}