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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('PaymentID');
            $table->unsignedBigInteger('OrderID')->constrained('ordersummary');
            $table->date('PaymentDate')->nullable(false);
            $table->string('PaymentMethod', 20)->nullable(false);
            $table->decimal('AmountTotal', 8, 2)->nullable(false);
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
        Schema::dropIfExists('payments');
    }
};
