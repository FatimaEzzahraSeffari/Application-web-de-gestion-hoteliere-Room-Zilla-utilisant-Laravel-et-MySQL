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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('country');
            $table->string('room_type')->nullable();
            $table->integer('no_of_room')->nullable();
            $table->integer('no_of_children')->nullable();
            $table->integer('no_of_adult')->nullable();
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->string('special_Requests');  
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
        Schema::dropIfExists('bookings');
    }
};
