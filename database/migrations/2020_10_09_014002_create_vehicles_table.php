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
            $table->enum('type', ['quad', 'dirtbike', '4wheeler', 'truck' ,'rockcrawler', 'jeep', 'side by side', 'other'])->nullable()->default(NULL);
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
