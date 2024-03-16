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
        Schema::create('waste_dictionaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('img_url');
            $table->boolean('is_recycle');
            $table->boolean('is_organic')->default(false);
            $table->text('how_to_recycle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waste_dictionaries');
    }
};
