<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recycle_type_recycle_place', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('recycle_type_id')->unsigned();
            $table->bigInteger('recycle_place_id')->unsigned();

            $table->foreign(
                'recycle_type_id',
                'recycle_type'
            )->references('id')->on('recycle_types');
            $table->foreign('recycle_place_id', 'recycle_place')->references('id')->on('recycle_places');
            $table->unique(['recycle_type_id', 'recycle_place_id'], 'unique_primary_key');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recycl_type_recycle_place');
    }
};
