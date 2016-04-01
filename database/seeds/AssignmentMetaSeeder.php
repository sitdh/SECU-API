<?php
use Faker\Factory as Faker;

class AssignmentMetaSeeder extends DatabaseSeeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 100) as $index) {
            DB::table('assignment_meta')->insert([
                'assignment_id' => $faker->numberBetween(0,100),
                'assignment_meta_key' => $faker->md5,
                'assignment_metavalue' => $faker->text($maxNbChars = 200)
            ]);
        }
    }
}
