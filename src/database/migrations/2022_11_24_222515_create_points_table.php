<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_id');
            $table->unsignedBigInteger('city_id');

            $table->time('arriving_time');
            $table->time('leaving_time');
            $table->decimal('fee',9,2);
            $table->unsignedInteger('sort');
            
            $table->boolean('first_point');
            $table->boolean('last_point');

            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

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

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Schema::dropIfExists('points');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
