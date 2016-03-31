<?php
use Faker\Factory as Faker;
class AssignmentProjectMetaSeeder extends DatabaseSeeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 100) as $index) {
            DB::table('assignment_project_meta')->insert([
                'assproj_id' => $faker->numberBetween(0,10),
                'assproj_metakey' => $faker->md5,
                'assproj_metavalue' => $faker->text($maxNbChars = 200),
                'assignment_project_col' => $faker->md5,
                'assignment_project_metacol' => $faker->md5
            ]);
        }
    }
}