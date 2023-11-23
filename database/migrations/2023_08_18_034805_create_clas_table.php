<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clas', function (Blueprint $table) {
            $table->id();
            $table->string('english_name', 20);
            $table->string('roman_name', 20);
            $table->string('positional_name', 20);
            $table->unsignedBigInteger('level_id');
            $table->timestamps();

            $table->foreign('level_id')->references('id')->on('levels')->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clas');
    }
};
