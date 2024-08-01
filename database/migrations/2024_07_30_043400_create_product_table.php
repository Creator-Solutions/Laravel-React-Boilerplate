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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('SKU');
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('inventoryId');
            $table->decimal('price');
            $table->unsignedBigInteger('discountId')->nullabe();
            $table->timestamps();

            $table->foreign('categoryId')->references('id')->on('product_category');
            $table->foreign('inventoryId')->references('id')->on('product_inventory');
            $table->foreign('discountId')->references('id')->on('discount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
