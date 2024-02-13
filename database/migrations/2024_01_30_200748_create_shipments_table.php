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
        Schema::create('t_shipments', function (Blueprint $table) {
            $table->id('ShipmentID');
            $table->date('ShipmentDate')->nullable(false);
            $table->string('ShipmentAddress', 100)->nullable(false);
            $table->enum('ShipmentStatus', ['active', 'inactive'])->default('active');
            $table->string('TrackingNumber')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_shipments');
    }
};
