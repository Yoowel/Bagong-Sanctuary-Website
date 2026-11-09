<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_colors', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id')
                ->constrained('products')
                ->cascadeOnDelete();

            $table->string('color_name', 100);

            $table->string('image_path');

            $table->timestamps();

            $table->unique(['product_id', 'color_name']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_colors');
    }
};