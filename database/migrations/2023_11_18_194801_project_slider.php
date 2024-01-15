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
        Schema::create('project_slider', function (Blueprint $table) {
            $table->id();
            $table->string('photo_url', 1000)->nullable();
            $table->foreignId('user_id')->references('id')->on("users")->nullable();
            $table->foreignId('project_id')->references('id')->on("projects")->nullable();
            $table->integer('created_at')->nullable();
            $table->integer('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
