<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User_group', function (Blueprint $table) {
            $table->bigIncrements('group_id');
            $table->string('group_type', 100)->nullable();
            $table->text('group_description')->nullable();
            $table->bigIncrements('sub_group');
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
        Schema::drop('User_group');
    }
}
