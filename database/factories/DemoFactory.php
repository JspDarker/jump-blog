<?php

use Faker\Generator as Faker;

$factory->define(\App\Account::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'email' => $faker->email
    ];
});

$factory->define(\App\Department::class, function(Faker $faker) {
    return [
        'account_id' => \App\Account::all()->random()->id,
        'name' => $faker->name,
        'icon' => $faker->randomElement(array('fa fa-rocket','fa fa-plane','fa fa-car', 'fa fa-truck', 'fa fa-subway', 'fa fa-bicycle')),
        'url'  => $faker->userName
    ];
});
