<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Shop;
use App\Manager;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->word(10),
        'image_url' => 'http://www.clker.com/cliparts/S/e/P/6/M/t/shop-front-icon-md.png',
        'manager_id' => $faker->unique()->randomElement(Manager::pluck('id', 'id')->toArray()),
    ];
});
