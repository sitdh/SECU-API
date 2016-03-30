<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('feedback_id');
            $table->bigIncrements('feedback_object_id');
            $table->bigIncrements('user_id');
            $table->text('feedback_message')->nullable();
            $table->bigIncrements('replay_id');
            $table->dateTime('feedback_timestamp');
            $table->bigIncrements('previous_feedback_id');
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
        Schema::drop('feedback');
    }
}
