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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable();
            $table->text('dec', 300)->nullable();
            $table->text('finish_date',)->index()->nullable();
            $table->foreignId('user_id_create')->references('id')->on("users")->nullable();
            $table->text('customer')->nullable();
            $table->enum('active', ['0','1'])->default(0);
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
