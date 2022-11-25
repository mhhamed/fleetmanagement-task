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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            
            $table->boolean('tv')->default(1);
            $table->boolean('conditioning')->default(1);
            $table->boolean('food')->default(1);
            $table->boolean('drink')->default(1);
            $table->boolean('wifi')->default(1);
            
            $table->tinyInteger('classes')->default(1)->comment('1 = classic / 2 elite / 3 elite plus');
            
            $table->unsignedBigInteger('bus_id');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');

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

        Schema::dropIfExists('trips');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
