<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseMetasTable extends Migration
{
    
    public function up()
    {
        Schema::create('course_meta', function(Blueprint $table) {
            $table->bigIncrements('course_meta_id');
            $table->bigInteger('course_id');
            $table->string('course_metakey', 100);
            $table->text('course_metavalue');
            // Constraints declaration
        });
    }

    public function down()
    {
        Schema::drop('course_metas');
    }
}
