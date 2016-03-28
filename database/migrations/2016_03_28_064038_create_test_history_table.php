<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_history', function (Blueprint $table) {
            $table->bigIncrements('test_history_id');
            $table->bigInteger('assignment_proj_id');
            $table->text('test_result')->nullable();
            $table->text('test_log_location')->nullable();
            $table->timestamp('test_start');
            $table->timestamp('compile_done');
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
        Schema::drop('test_history');
    }
}
