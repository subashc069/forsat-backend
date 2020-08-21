<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Opportunity;
use App\User;
use Faker\Generator as Faker;

$factory->define(Opportunity::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(15, true),
        'description' => $faker->text(500),
        'category_id' => \App\Models\Lookups\Category::all()->random(),
        'country_id' => \App\Models\Lookups\Country::all()->random(),
        'deadline' => $faker->dateTime(),
        'organizer' => $faker->company,
        'created_by' => User::all()->random(),
    ];
});
