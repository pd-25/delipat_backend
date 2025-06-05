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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Blog title
            $table->string('slug')->unique(); // Unique slug
            $table->longText('short_description'); // Short description
            $table->text('description'); // Full description
            $table->string('image'); // Blog image URL or path
            $table->json('tags')->nullable(); // Tags stored as JSON
            $table->string('meta_title')->nullable(); // Meta title
            $table->text('meta_description')->nullable(); // Meta description
            $table->text('headerscript')->nullable(); // Header scripts
            $table->timestamps(); // Created at and Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
