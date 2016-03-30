<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferingCourseMetasTable extends Migration
{
    
    public function up()
    {
        Schema::create('offering_course_meta', function(Blueprint $table) {
            $table->bigIncrements('oc_meta_id');
            $table->bigInteger('offering_course_id');
            $table->string('oc_metakey', 100);
            $table->text('oc_metavalue');
        });
    }

    public function down()
    {
        Schema::drop('offering_course_meta');
    }
}
