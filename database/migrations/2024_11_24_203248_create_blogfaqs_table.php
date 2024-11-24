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
        Schema::create('blogfaqs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('blog_id')->constrained('blogs')->onDelete('cascade'); // Foreign key referencing blogs table
            $table->string('question'); // FAQ question
            $table->text('answer'); // FAQ answer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogfaqs');
    }
};
