<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_meta', function (Blueprint $table) {
            $table->bigIncrements('feedback_meta_id');
            $table->bigIncrements('feedback__id');
            $table->string('feedback_metakey', 100)->nullable();
            $table->text('feedback_metavalue')->nullable();
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
        Schema::drop('feedback_meta');
    }
}
