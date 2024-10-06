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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('country')->nullable();
            $table->string('release')->nullable();
            $table->string('actors')->nullable();
            $table->text('synopsis')->nullable();
            $table->string('link')->nullable();
            $table->string('cover_img')->nullable();
            $table->integer('duration')->nullable();
            $table->decimal('star', 2, 1);
            $table->string('quality');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
