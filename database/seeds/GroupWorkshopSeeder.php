<?php
use Faker\Factory as Faker;

class GroupWorkshopSeeder extends DatabaseSeeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 100) as $index) {
            \App\GroupWorkshop::create([
                'assignment_id' => $faker->numberBetween(1,100),
                'user_id' => $faker->numberBetween(0,100),
                'added_by_id' => $faker->numberBetween(0,100)
            ]);
        }
    }
}
