<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {

    return [
        'product_name' => $faker->word,
        'stok' => $faker->randomDigitNotNull,
        'category' => $faker->word,
        'brand' => $faker->word,
        'price' => $faker->randomDigitNotNull,
        'description' => $faker->text,
        'poto' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
