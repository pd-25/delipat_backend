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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('headerscript')->nullable();
            $table->text('short_description')->nullable();
            
            $table->string('sec1_heading')->nullable();
            $table->text('sec1_description')->nullable();
            $table->string('sec1_image')->nullable();

            $table->string('sec2_heading')->nullable();
            for ($i = 1; $i <= 6; $i++) {
                $table->string("sec2_service{$i}_heading")->nullable();
                $table->text("sec2_service{$i}_description")->nullable();
                $table->string("sec2_service{$i}_icon")->nullable();
            }

            $table->string('sec3_heading')->nullable();
            for ($i = 1; $i <= 4; $i++) {
                $table->string("sec3_service{$i}_heading")->nullable();
                $table->text("sec3_service{$i}_description")->nullable();
                $table->string("sec3_service{$i}_icon")->nullable();
            }

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
