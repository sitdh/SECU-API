<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyingResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studying_result', function (Blueprint $table) {
            $table->bigIncrements('sr_id');
            $table->bigIncrements('user_id');
            $table->bigIncrements('course_enroll_id');
            $table->float('score',3,2)->nullable();
            $table->string('grade',5)->nullable();
            $table->timestamps('update_timestamp');
            $table->timestamps('last_update');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('studying_result');
    }
}