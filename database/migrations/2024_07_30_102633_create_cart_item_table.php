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
        Schema::create('cart_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sessionId');
            $table->unsignedBigInteger('productId');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('sessionId')->references('id')->on('shopping_session');
            $table->foreign('productId')->references('product')->on('id');
        });
    }
};
