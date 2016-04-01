<?php
use Faker\Factory as Faker;

class AssignmentSeeder extends DatabaseSeeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 100) as $index) {
            \App\Assignment::create([
                'offering_course_id' => $faker->numberBetween(1,10),
                'assignment_number' => $faker->numberBetween(1,20),
                'assignment_name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'assignment_description' => $faker->text($maxNbChars = 200),
                'assignment_type' => $faker->randomElement($array = array ('exam','lesson','quiz')),
                'assignment_date' => $faker->numberBetween(0,10),
                'public_assignment' => $faker->dateTime($max = 'now')
            ]);
        }
    }
}
