<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment', function (Blueprint $table) {
            $table->bigIncrements('assignment_id');
            $table->bigInteger('offering_course_id');
            $table->smallInteger('assignment_number');
            $table->string('assignment_name', 100)->nullable();
            $table->text('assignment_description')->nullable();
            $table->string('assignment_type', 50)->nullable();
            $table->timestamp('assignment_date');
            $table->timestamp('public_assignment');
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
        Schema::drop('assignment');
    }
}
