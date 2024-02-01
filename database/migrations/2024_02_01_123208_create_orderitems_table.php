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
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id('OrderItemID');
            $table->unsignedBigInteger('OrderID')->constrained('ordersummary');
            $table->unsignedBigInteger('ProductID')->constrained('products');
            $table->unsignedBigInteger('ShipmentID')->constrained('shipments');
            $table->integer('Quantity')->nullable(false);
            $table->decimal('Subtotal', 8, 2)->nullable(false);
            $table->timestamps();

            // Indexes
            $table->index('OrderID');
            $table->index('ProductID');
            $table->index('ShipmentID');

            $table->foreign('OrderID')->references('OrderID')->on('ordersummary');
            $table->foreign('ProductID')->references('ProductID')->on('products');
            $table->foreign('ShipmentID')->references('ShipmentID')->on('shipments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderitems');
    }
};
