<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkspacePreferenceSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workspace_preference_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('link_title');
            $table->string('link');
            $table->string('preference_status');
            $table->timestamps();
        });

        Schema::table('workspace_preference_settings', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     $table->unsignedBigInteger('user_id');
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workspace_preference_settings');
    }
}
