<?php

namespace app;

use app\Models\Cow;
use app\Models\Chicken;
use app\Counter\AnimalCounter;
use app\Counter\ProductCounter;

include 'Farm.php';
include 'Models/Cow.php';
include 'Models/Chicken.php';
include 'Counter/AnimalCounter.php';
include 'Counter/ProductCounter.php';

$farm = new Farm(new AnimalCounter, new ProductCounter);

$farm->addAnimals(new Cow, 10);
$farm->addAnimals(new Chicken, 20);
$farm->printAnimals();

$farm->collect(7);
$farm->printProducts();

$farm->addAnimals(new Cow);
$farm->addAnimals(new Chicken, 5);
$farm->printAnimals();

$farm->collect(7);
$farm->printProducts();