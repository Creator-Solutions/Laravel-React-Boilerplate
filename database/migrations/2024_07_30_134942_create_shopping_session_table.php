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
        Schema::create('shopping_session', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->decimal('total');
            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users');
        });
    }
};
