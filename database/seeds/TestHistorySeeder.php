<?php
use Faker\Factory as Faker;

class TestHistorySeeder extends DatabaseSeeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 100) as $index) {
            \App\TestHistory::create([
                'assignment_proj_id' => $faker->numberBetween(1,100),
                'test_result' => $faker->text($maxNbChars = 200),
                'test_log_location' => $faker->text($maxNbChars = 200),
                'test_start' =>  $faker->dateTime($max = 'now'),
                'compile_done' =>  $faker->dateTime($max = 'now')
            ]);
        }
    }
}
