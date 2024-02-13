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
        Schema::create('r_ordersummary', function (Blueprint $table) {
            $table->id('OrderID');
            $table->unsignedBigInteger('CustomerID')->constrained('r_customers');
            $table->date('OrderDate')->nullable(false);
            $table->enum('OrderStatus', ['Confirmed', 'Processing', 'Shipping', 'In-Delivery', 'Received', 'Returned'])->default('Confirmed');
            $table->timestamps();

            // Indexes
            $table->index('CustomerID');

            // References
            $table->foreign('CustomerID')->references('CustomerID')->on('r_customers');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_ordersummary');
    }
};
