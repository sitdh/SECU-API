<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UserTableSeeder');
        $this->call('AssignmentProjectSeeder');
        $this->call('AssignmentProjectMetaSeeder');
        $this->call('AssignmentSeeder');
        $this->call('AssignmentMetaSeeder');

        $this->call('GroupWorkshopSeeder');
        $this->call('GroupWorkshopMetaSeeder');
        $this->call('TestHistorySeeder');
        $this->call('OptionsSeeder');

        $this->call('CourseSeeder');
    }
}
