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
        Schema::create('konsers', function (Blueprint $table) {
            $table->id();
            $table->string('artist_name');
            $table->dateTime('date_time');
            $table->text('venue');
            $table->integer('price');
            $table->integer('ticket_available');
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->timestamps();
        });

        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ticket_number');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('konser_id');
            $table->integer('quantity');
            $table->integer('total_price');
            $table->string('status');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('konser_id')->references('id')->on('konsers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
