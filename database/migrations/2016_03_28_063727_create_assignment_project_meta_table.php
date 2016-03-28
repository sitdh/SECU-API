<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentProjectMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_project_meta', function (Blueprint $table) {
            $table->bigIncrements('assproj_meta_id');
            $table->bigInteger('assproj_id');
            $table->string('assproj_metakey', 100)->nullable();
            $table->text('assproj_metavalue')->nullable();
            $table->string('assignment_project_col', 45)->nullable();
            $table->string('assignment_project_metacol', 45)->nullable();
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
        Schema::drop('assignment_project_meta');
    }
}
