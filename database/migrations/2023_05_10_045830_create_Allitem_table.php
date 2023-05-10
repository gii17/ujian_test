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
            $table->string('name_konser');
            $table->date('date_konser');
            $table->time('time_konser');
            $table->string('location_konser');
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
            $table->timestamp('deleted_at')->nullable();
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
