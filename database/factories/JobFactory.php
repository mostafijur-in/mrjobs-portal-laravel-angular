<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {

    $jobTypes   = ['Part-time', 'Full-time'];
    $exps       = range(1,10);
    $salaries   = [2000, 3000, 5000];

    return [
        'job_title' => $faker->jobTitle,
        'job_type'  => $jobTypes[array_rand($jobTypes)],
        'company_name'  => $faker->company,
        'country'       => $faker->country,
        'posted_date'   => $faker->dateTimeThisYear,
        'experience'    => $exps[array_rand($exps)],
        'salary'        => $salaries[array_rand($salaries)],
        'description'   => $faker->paragraph(),
    ];
});
