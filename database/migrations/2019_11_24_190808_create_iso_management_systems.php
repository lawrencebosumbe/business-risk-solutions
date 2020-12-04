<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\IsoManagementSystem;

class CreateIsoManagementSystems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iso_management_systems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
        });

        //Seeding iso_management_systems table with Eloquent Model
        IsoManagementSystem::create([
            'name' => 'Health and Safety Management'
        ]);

        IsoManagementSystem::create([
            'name' => 'Quality Management'
        ]);

        IsoManagementSystem::create([
            'name' => 'Environmental Management'
        ]);

        IsoManagementSystem::create([
            'name' => 'Non Conformance'
        ]);

        IsoManagementSystem::create([
            'name' => 'CAPA'
        ]);

        IsoManagementSystem::create([
            'name' => 'Change Control'
        ]);

        IsoManagementSystem::create([
            'name' => 'Document Control'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iso_management_systems');
    }
}
