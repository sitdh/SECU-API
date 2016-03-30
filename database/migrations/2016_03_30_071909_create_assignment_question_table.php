<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_question', function (Blueprint $table) {
            $table->bigIncrements('aq_id');
            $table->string('question_name', 100)->nullable();
            $table->text('guideline')->nullable();
            $table->text('example')->nullable();
            $table->text('initial_code')->nullable();
            $table->string('language', 50)->nullable();
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
        Schema::drop('assignment_question');
    }
}
