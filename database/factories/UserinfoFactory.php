<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Userinfo;
use Faker\Generator as Faker;

$factory->define(App/Userinfo::class, function (Faker $faker) {
    return [
        'user_id' => factory('App/User')-> create()->id,
        'user_address' => $faker->address,
        'user_phone' => $faker->phone,
        'user_city' => $faker->city,
        'user_township' => $faker->postcode,
    ];
});
