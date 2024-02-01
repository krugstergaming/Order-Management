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
            $table->id('ShipmentID');
            $table->unsignedBigInteger('PaymentID')->constrained('payments');
            $table->date('ShipmentDate')->nullable(false);
            $table->string('ShipmentAddress', 100)->nullable(false);
            $table->enum('ShipmentStatus', ['active', 'inactive'])->default('active');
            $table->string('TrackingNumber')->unique();
            $table->timestamps();

            // Indexes
            $table->index('PaymentID');

            $table->foreign('PaymentID')->references('PaymentID')->on('payments');
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
