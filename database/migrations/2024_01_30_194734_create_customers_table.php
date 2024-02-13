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
        Schema::create('r_customers', function (Blueprint $table) {
            $table->id('CustomerID');
            $table->string('FirstName', 100)->nullable(false);
            $table->string('LastName', 100)->nullable(false);
            $table->string('Email', 100)->nullable(false);
            $table->string('Phone', 100)->nullable(false);
            $table->string('Address', 100)->nullable(false);
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
        Schema::dropIfExists('r_customers');
    }
};
