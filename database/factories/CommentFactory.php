<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\Question;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->text(255),
        'question_id' => Question::all()->random()->id,
        'created_by' => \App\User::all()->random()-id,
    ];
});
