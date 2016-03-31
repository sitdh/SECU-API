<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupWorkshopMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_workshop_meta', function (Blueprint $table) {
            $table->bigIncrements('gw_meta_id');
            $table->bigInteger('ga_id');
            $table->string('ga_metakey', 100)->nullable();
            $table->text('ga_metavalue')->nullable();
            //$table->timestamps();
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
