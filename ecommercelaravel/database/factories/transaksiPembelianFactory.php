<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\transaksiPembelian;
use Faker\Generator as Faker;

$factory->define(transaksiPembelian::class, function (Faker $faker) {

    return [
        'nama_product' => $faker->word,
        'quantity' => $faker->word,
        'ammount' => $faker->word,
        'price' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
