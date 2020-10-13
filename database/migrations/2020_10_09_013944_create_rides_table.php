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
            $table->string('ridetype')->nullable()->default(NULL);
            $table->string('location');
            $table->string('distance');
            $table->string('trail')->nullable()->default(NULL);
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
