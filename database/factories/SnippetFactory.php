<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title'=>$faker->word,
        'description'=>$faker->text,
        'language'=>'Laravel',
        'type'=>1
    ];
});
