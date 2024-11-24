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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo1')->nullable();
            $table->string('logo2')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('facebooklink')->nullable();
            $table->string('twitterlink')->nullable();
            $table->string('instagramlink')->nullable();
            $table->string('youtubelink')->nullable();
            $table->string('linkdinlink')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('header_script')->nullable();
            $table->text('footer_script')->nullable();
            $table->text('body_script')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
