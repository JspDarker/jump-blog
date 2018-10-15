<?php

use Faker\Generator as Faker;

$factory->define(\App\Account::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'email' => $faker->email
    ];
});
