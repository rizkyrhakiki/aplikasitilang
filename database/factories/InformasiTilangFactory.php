<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\InformasiTilang;
use Faker\Generator as Faker;

$factory->define(InformasiTilang::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'tanggal_mulai' => $faker->word,
        'tanggal_selesai' => $faker->word,
        'lokasi' => $faker->word,
        'keterangan' => $faker->word
    ];
});
