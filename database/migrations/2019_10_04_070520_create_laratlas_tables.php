<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaratlasTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('region_name');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
        });

        Schema::create('districts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();

            $table->unsignedInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions')
                ->onDelete('cascade');
        });

        Schema::create('wards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ward_name');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();

            $table->unsignedInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts')
                ->onDelete('cascade');
        });

        Schema::create('streets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street_name');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();

            $table->unsignedInteger('ward_id');
            $table->foreign('ward_id')->references('id')->on('wards')
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
        Schema::dropIfExists('regions');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('wards');
        Schema::dropIfExists('streets');
    }
}
