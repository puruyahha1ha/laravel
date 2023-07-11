<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name_sei' => $faker->lastName,
        'name_mei' => $faker->firstName,
        'nickname' => $faker->nickname,
        'gender' => $faker->numberBetween(1,2),
        'password' => $faker->password,
        'email' => $faker->unique()->safeEmail,
    ];
});
