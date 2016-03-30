<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentTestcaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_testcase', function (Blueprint $table) {
            $table->bigIncrements('atc_id');
            $table->bigIncrements('aq_id');
            $table->string('testcase_number', 30)->nullable();
            $table->text('testcase_objective')->nullable();
            $table->text('testcase_content')->nullable();
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
        Schema::drop('assignment_testcase');
    }
}
