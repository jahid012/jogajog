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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->text('listing_name')->nullable();
            $table->integer('category_id')->nullable();
            $table->text('keywords')->nullable();

            $table->text('images')->nullable();
            $table->text('videos')->nullable();

            $table->text('phone')->nullable();
            $table->text('website')->nullable();
            $table->string('email')->nullable();

            $table->text('description')->nullable();

            $table->text('locatin_details')->nullable();
            $table->text('country')->nullable();
            $table->text('state')->nullable();
            $table->text('city')->nullable();
            $table->integer('zip')->nullable();

            $table->text('pricing_one')->nullable();
            $table->text('pricing_two')->nullable();
            $table->text('pricing_three')->nullable();
            $table->text('pricing_four')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
