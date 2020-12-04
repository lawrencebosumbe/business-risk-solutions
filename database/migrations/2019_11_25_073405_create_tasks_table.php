<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('project_id')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('attachment')->nullable();
            $table->string('priority')->nullable();
            $table->integer('completed')->default('0');
            $table->date('deadline');
            $table->timestamps();
        });

        // REFERENCIAL INTEGRITY CONSTRAINT (FOREIGN KEY CONSTRAINT)
        Schema::table('tasks', function (Blueprint $table) {

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('tasks');
    }
}
