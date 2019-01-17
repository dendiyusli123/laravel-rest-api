<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Produk::class, function (Faker $faker) {
    return [
        'nama' => $faker->word,
        'detail' => $faker->paragraph,
        'harga' => $faker->numberBetween(50000,500000),
        'stok' => $faker->randomDigit,
        'diskon' => $faker->numberBetween(2,30)
    ];
});
