<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Destination;
use Faker\Generator as Faker;

$factory->define(Destination::class, function (Faker $faker) {

    $destinations = ['Kayangan Lake', 'Twin Lagoon','Barracuda Lake','Frazer Island','Plaza Quartel','Burnham Park','Tam-awan Village','Fort San Pedro',
    'Nacpan Beach','Hidden Beach','White Beach','Bulabog Beach','Diniwid Beach Road','Rizal Park','Fort Santiago','National Museum of Fine Arts','Chocolate Hills','Mt. Apo','Philippine Eagle Center','Taal Volcano'];
    $rating = [4.5, 4.6, 4.7, 4.8, 4.9, 5.0];
    return [
        'name' => $faker->unique()->randomElement($destinations, 1),
        'address' => $faker->city,
        'type' => $faker->words(2, true),
        'rating' => $faker->randomElement($rating, 1)
    ];
});
