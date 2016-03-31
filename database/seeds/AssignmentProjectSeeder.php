<?php
use Faker\Factory as Faker;

class AssignmentProjectSeeder extends DatabaseSeeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 100) as $index) {
            \App\AssignmentProject::create([
                'group_owner_id' => $faker->numberBetween(0,10),
                'project_name' => $faker->sentence($nbWords = 1, $variableNbWords = true),
                'project_repo_id' => $faker->numberBetween(0,10),
                'project_location' => $faker->url,
                'project_description' => $faker->text($maxNbChars = 200),
                'project_creation' => $faker->numberBetween(0,10)
            ]);
        }
    }
}
