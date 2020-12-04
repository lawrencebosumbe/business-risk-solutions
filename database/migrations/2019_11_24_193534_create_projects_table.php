<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('iso_management_id');
            $table->string('project_name');
            $table->string('project_desc');
            $table->string('visibility_status');
            $table->string('project_manager');
            $table->integer('estimated_duration');
            $table->datetime('started_at');
            $table->datetime('finished_at');
            $table->datetime('last_opened_at');
            $table->timestamps();
        });

        // REFERENCIAL INTEGRITY (FOREIGN KEY CONSTRAINT)
        Schema::table('projects', function ($table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

             $table->foreign('iso_management_id')
                  ->references('id')
                  ->on('iso_management_systems')
                  ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
