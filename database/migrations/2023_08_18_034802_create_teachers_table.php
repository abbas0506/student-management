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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('father', 50);
            $table->date('dob')->nullable();
            $table->string('cnic', 20)->unique();
            $table->string('phone', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('designation', 20)->nullable();
            $table->date('join_date')->nullable();
            $table->string('personal_no', 10)->unique();
            $table->boolean('active')->default(1);

            // $table->unsignedBigInteger('user_id');

            // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};