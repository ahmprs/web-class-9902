<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\tbl_students;
use Faker\Generator as Faker;

use Illuminate\Support\Str;

$factory->define(tbl_students::class, function (Faker $faker) {
    return [
        'std_id'=>null,
        'std_name'=>Str::random(10),
        'std_phone'=>Str::random(10),
        'std_active'=>rand(0,1),
    ];
});
