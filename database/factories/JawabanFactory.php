<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jawaban;
use App\Pertanyaan;
use Faker\Generator as Faker;

$factory->define(Jawaban::class, function (Faker $faker) {
    return [
        'isi' => $faker->paragraph,
        'pertanyaan_id' => function ()
        {
            return Pertanyaan::all()->random();
        },
        'created_at' => now(),
        'updated_at' => now()
    ];
});
