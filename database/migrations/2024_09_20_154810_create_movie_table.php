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
            $table->string('title');
            $table->integer('time');
            $table->string('country');
            $table->string('release');
            $table->string('actors');
            $table->text('synopsis');
            $table->string('link');
            $table->string('cover_img');
            $table->integer('time');
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
