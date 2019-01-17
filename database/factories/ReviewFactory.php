<?php

use App\Model\Produk;
use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        'produk_id' => function(){
            return Produk::all()->random();
        },
        'pelanggan' => $faker->name,
        'review' => $faker->paragraph,
        'bintang' => $faker->numberBetween(0,5)
    ];
});
