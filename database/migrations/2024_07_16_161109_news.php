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
      // Create table for storing roles
      Schema::create('news', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('category_id')->nullable();
        $table->string('title');
        $table->string('seo_title')->nullable();
        $table->text('body');
        $table->string('image')->nullable();
        $table->string('slug')->unique();
        $table->text('meta_description');
        $table->text('meta_keywords');
        $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
        $table->boolean('featured')->default(0);
        $table->timestamps();

        //$table->foreign('author_id')->references('id')->on('users');
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
