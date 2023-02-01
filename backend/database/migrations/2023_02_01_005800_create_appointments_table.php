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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('type_of_service');
            $table->string('price');
            $table->string('clothes_weight');
            $table->string('total_payment');
            $table->string('available_time');
            $table->string('available_date');
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
        Schema::dropIfExists('appointments');
    }
};
