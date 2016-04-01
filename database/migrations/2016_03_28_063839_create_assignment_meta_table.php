<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_meta', function (Blueprint $table) {
            $table->bigIncrements('assignment_meta_id');
            $table->bigInteger('assignment_id');
            $table->string('assignment_meta_key', 100)->nullable();
            $table->text('assignment_metavalue')->nullable();
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
       Schema::drop('assignment_meta');
    }
}
