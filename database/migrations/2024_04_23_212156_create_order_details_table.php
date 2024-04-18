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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_custom')->default(false);
            $table->foreignId('item_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('quantity')->unsigned();
            $table->foreignId('design_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('color_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('size_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('material_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
