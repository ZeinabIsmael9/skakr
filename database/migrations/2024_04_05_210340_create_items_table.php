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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('color_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('size_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('material_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('original_price')->unsigned()->comment('before discount');
            $table->decimal('price')->unsigned()->comment('after discount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
