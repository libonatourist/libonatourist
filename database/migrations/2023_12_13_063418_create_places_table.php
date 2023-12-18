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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->unsigned()->references('id')->on('categories')->cascadeOnDelete();
            $table->foreignId('user_id')->unsigned()->nullable()->references('id')->on('users')->cascadeOnDelete();
            $table->string('name');
            $table->string('address');
            $table->longText('description');
            $table->string('guideline');
            $table->string('view_url');
            $table->float('latitude');
            $table->float('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
