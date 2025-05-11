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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('view')->default(0);
            $table->string('duration')->nullable();
            $table->string('director')->nullable();
            $table->text('summary');
            $table->text('story');
            $table->text('actors')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('image')->nullable();
            $table->text('video')->nullable();
            $table->text('video_path')->nullable();
            $table->decimal('price', 20, 3);
            $table->tinyInteger('status')->default(0);
            $table->string('tags');
            $table->tinyInteger('sold_number')->default(0);
            $table->foreignId('category_id')->constrained('product_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('year_id')->constrained('years')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('language_id')->constrained('languages')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('published_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
