<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordersummary', function (Blueprint $table) {
            $table->id('OrderID');
            $table->unsignedBigInteger('CustomerID')->constrained('customers');
            $table->date('OrderDate')->nullable(false);
            $table->enum('OrderStatus', ['Processing', 'In-Delivery', 'Received', 'Cancelled'])->default('Processing');
            $table->timestamps();

            // Indexes
            $table->index('CustomerID');

            $table->foreign('CustomerID')->references('CustomerID')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordersummary');
    }
};
