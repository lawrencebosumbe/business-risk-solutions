<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('iso_management_id');
            $table->unsignedBigInteger('project_id');
            $table->string('name');
            $table->string('description');
            $table->string('sharing_status');
            $table->string('alert_status');
            $table->string('layout');
            $table->string('workflow');
            $table->string('applicable_status');
            $table->string('recipient_alert');
            $table->string('review_date_alert');
            $table->string('mandatory_review_date_alert');
            $table->datetime('review_date');
            $table->timestamps();

        });

        // REFERENCIAL INTEGRITY (FOREIGN KEY CONSTRAINT)
        Schema::table('folders', function ($table) {
                $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

                $table->foreign('iso_management_id')
                  ->references('id')
                  ->on('iso_management_systems')
                  ->onDelete('cascade');

                $table->foreign('project_id')
                  ->references('id')
                  ->on('projects')
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
        Schema::dropIfExists('folders');
    }
}
