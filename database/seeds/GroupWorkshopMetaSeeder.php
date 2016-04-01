<?php
use Faker\Factory as Faker;

class GroupWorkshopMetaSeeder extends DatabaseSeeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 100) as $index) {
            DB::table('group_workshop_meta')->insert([
                'ga_id' => $faker->numberBetween(1,100),
                'ga_metakey' => $faker->md5,
                'ga_metavalue' => $faker->text($maxNbChars = 200)
            ]);
        }
    }
}
