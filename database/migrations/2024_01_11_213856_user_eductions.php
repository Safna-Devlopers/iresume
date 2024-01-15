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
        Schema::create('user_eductions', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable();
            $table->string('uni_title', 100)->nullable();
            $table->text('dec', 300)->nullable();
            $table->text('time', 300)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_eductions');
    }
};
