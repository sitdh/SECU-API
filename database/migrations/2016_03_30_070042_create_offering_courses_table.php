<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferingCoursesTable extends Migration
{
    
    public function up()
    {
        Schema::create('offering_course', function(Blueprint $table) {
            $table->bigIncrements('offering_course_id');
            $table->bigInteger('course_id');
            $table->dateTime('educational_year');
            $table->string('semester', 1);
            $table->string('section', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('offering_course');
    }
}
