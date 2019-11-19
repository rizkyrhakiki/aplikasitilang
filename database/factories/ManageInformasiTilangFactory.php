<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ManageInformasiTilang;
use Faker\Generator as Faker;

$factory->define(ManageInformasiTilang::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'tanggal_start' => $faker->date('Y-m-d H:i:s'),
        'tanggal_finish' => $faker->date('Y-m-d H:i:s'),
        'lokasi' => $faker->word,
        'gambar' => $faker->word,
        'keterangan' => $faker->word
    ];
});
