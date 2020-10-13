<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('oid');
            $table->string('vehicle_name');
            $table->string('model')->nullable()->default('Unknown');
            $table->string('type')->nullable()->default(NULL);
            $table->string('distance')->nullable()->default(NULL);
            $table->boolean('mainteance')->nullable()->default(false);
            $table->softDeletes()->nullable()->default(NULL);
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
        Schema::dropIfExists('vehicles');
    }
}
