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
//        'full_name',
//        'country',
//        'address',
//        'street',
//        'city',
//        'phone_number_1',
//        'phone_number_2',
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('country')->nullable();;
            $table->string('address')->nullable();;
            $table->string('city',)->nullable();;
            $table->string('phone_number_1')->nullable();;
            $table->string('phone_number_2')->nullable();;
            $table->foreignIdFor(\App\Models\Order::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_addresses');
    }
};
