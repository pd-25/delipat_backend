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
        Schema::create('meta_data', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('page_name'); // Name of the page
            $table->string('meta_title'); // Meta title for the page
            $table->text('meta_description'); // Meta description for the page
            $table->text('headerscript')->nullable(); // Optional script to be added in the header
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_data');
    }
};
