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
        Schema::create('orders', function (Blueprint $table) {
            $table->ulid('id')->index()->primary();
            $table->foreignUlid('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('status');
            $table->string('currency');
            $table->unsignedInteger('total_in_cents');
            $table->unsignedInteger('subtotal_in_cents');
            $table->unsignedInteger('tax_in_cents');
            $table->unsignedInteger('shipping_in_cents');
            $table->unsignedInteger('discount_in_cents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
