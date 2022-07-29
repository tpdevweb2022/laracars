<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId("brand_id")->constrained();
            $table->foreignId("type_id")->constrained();
            $table->float("price", 8, 2, true);
            $table->string("energy"); // ENUM
            $table->integer("power", false, true);
            $table->date("release_date");
            $table->float("weight");
            $table->string("thumbnail");
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
        Schema::dropIfExists('cars');
    }
};
