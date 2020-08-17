<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;
use App\Snippet;

$factory->define(Snippet::class, function (Faker $faker) {
    return [
        'title'=>$faker->word,
        'description'=>$faker->text,
        'language'=>'laravel',
        'type'=>1
    ];
});
