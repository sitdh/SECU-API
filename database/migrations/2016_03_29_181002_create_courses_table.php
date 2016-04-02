<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    
    public function up()
    {
        Schema::create('course', function(Blueprint $table) {
            $table->bigIncrements('course_id');
            $table->string('course_number', 20);
            $table->string('course_name', 250);
            $table->text('course_description');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('course');
    }
}
