<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $records    = 100;   // Number of records to create;

        // factory(App\Job::class, $records)->make();

        $jobTypes   = ['Part-time', 'Full-time'];
        $exps       = range(1,10);
        $salaries   = [2000, 2500, 3000, 4000, 5000];
        
        // Create jobs
        for($i=1; $i<=$records; $i++) {
            \App\Job::create([
                'job_title' => $faker->jobTitle,
                'job_type'  => $jobTypes[array_rand($jobTypes)],
                'company_name'  => $faker->company,
                'country'       => $faker->country,
                'posted_date'   => $faker->dateTimeThisYear,
                'experience'    => $exps[array_rand($exps)],
                'salary'        => $salaries[array_rand($salaries)],
                'description'   => $faker->paragraph(),
            ]);
        }
    }
}
