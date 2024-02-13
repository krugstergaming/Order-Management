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
        Schema::create('t_orderitems', function (Blueprint $table) {
            $table->id('OrderItemID');
            $table->unsignedBigInteger('OrderID')->constrained('r_ordersummary');
            $table->unsignedBigInteger('ProductID')->constrained('r_products');
            $table->unsignedBigInteger('ShipmentID')->constrained('t_shipments');
            $table->unsignedBigInteger('PaymentID')->constrained('t_payments');
            $table->integer('Quantity')->nullable(false);
            $table->decimal('Subtotal', 8, 2)->nullable(false);
            $table->timestamps();

            // Indexes
            $table->index('OrderID');
            $table->index('ProductID');
            $table->index('ShipmentID');
            $table->index('PaymentID');

            // References
            $table->foreign('OrderID')->references('OrderID')->on('r_ordersummary');
            $table->foreign('ProductID')->references('ProductID')->on('r_products');
            $table->foreign('ShipmentID')->references('ShipmentID')->on('t_shipments');
            $table->foreign('PaymentID')->references('PaymentID')->on('t_payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_orderitems');
    }
};
