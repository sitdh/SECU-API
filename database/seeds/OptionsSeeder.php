<?php
use Faker\Factory as Faker;

class OptionsSeeder extends DatabaseSeeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 100) as $index) {
            \App\Options::create([
                'option_name' => $faker->text($maxNbChars = 100),
                'option_value' => $faker->text($maxNbChars = 200)
            ]);
        }
    }
}
