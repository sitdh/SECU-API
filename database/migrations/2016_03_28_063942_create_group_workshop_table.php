<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupWorkshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_workshop', function (Blueprint $table) {
            $table->bigIncrements('ga_id');
            $table->bigInteger('assignment_id');
            $table->bigInteger('user_id');
            $table->bigInteger('added_by_id');
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
        Schema::drop('group_workshop');
    }
}
