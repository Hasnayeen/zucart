<?php

use App\Models\Category;
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
            $table->ulid('id')->index()->primary();
            $table->string('name');
            $table->string('sku')->unique();
            $table->string('description');
            $table->string('image');
            $table->unsignedInteger('price_in_cents');
            $table->string('currency', 3);
            $table->unsignedInteger('quantity');
            $table->json('dimensions')->nullable();
            $table->json('weight')->nullable();
            $table->text('barcode')->nullable();
            $table->json('attributes')->nullable();
            $table->foreignIdFor(Category::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignUlid('store_id')->constrained('stores')->cascadeOnDelete();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
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
