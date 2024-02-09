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
        Schema::create('shipments', function (Blueprint $table) {
            $table->bigInteger('ShipmentID')->unsigned()->primary();
            $table->unsignedBigInteger('OrderID')->constrained('ordersummary');
            $table->date('ShipmentDate')->nullable(false);
            $table->string('ShipmentAddress', 100)->nullable(false);
            $table->enum('ShipmentStatus', ['active', 'inactive'])->default('active');
            $table->string('TrackingNumber')->unique();
            $table->timestamps();

            // Indexes
            $table->index('OrderID');

            $table->foreign('OrderID')->references('OrderID')->on('ordersummary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
};
