<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [
        'name'          => $faker -> word(),
        'gradation'     =>           rand(0, 8),  
        'price'         =>           rand(2, 10)
    ];
});
 