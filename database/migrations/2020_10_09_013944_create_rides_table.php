<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rides', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('oid');
            $table->string('name');
            $table->string('description')->nullable()->default(NULL);
            $table->enum('ridetype', ['quad', 'dirtbike', '4wheeler', 'truck' ,'rockcrawler', 'jeep', 'other'])->nullable()->default(NULL);
            $table->string('location');
            $table->string('trail');
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
        Schema::dropIfExists('rides');
    }
}
