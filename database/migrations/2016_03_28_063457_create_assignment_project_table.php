<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_project', function (Blueprint $table) {
            $table->bigIncrements('assproj_id');
            $table->bigInteger('group_owner_id');
            $table->text('project_name')->nullable();
            $table->text('project_repo_id')->nullable();
            $table->text('project_location')->nullable();
            $table->text('project_description')->nullable();
            $table->bigInteger('project_creation');
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
        Schema::drop('assignment_project');
    }
}
