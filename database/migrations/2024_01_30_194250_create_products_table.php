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
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductID');
            $table->string('ProductName', 100)->nullable(false);
            $table->string('Description', 200)->nullable(true);
            $table->decimal('Price', 8, 2)->nullable(false);
            $table->integer('StockQuantity')->nullable(false);
            $table->string('Manufacturer', 100)->nullable(false);
            $table->string('Category', 100)->nullable(false);
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
        Schema::dropIfExists('products');
    }
};
