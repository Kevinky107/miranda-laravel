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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon']);
            $table->unsignedBigInteger('user_id');
            $table->dateTime('date');
            $table->boolval('paid')->default(false);
            $table->integer('satisfaction')->nullable(null);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
