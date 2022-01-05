<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('busno');
            $table->string('busname');
            $table->string('busdriver');
            $table->string('associatebusdriver');
            $table->string('busbrand');
            $table->string('busimgname');
            $table->string('billbookname');
            $table->string('insurencename');
            $table->string('licenname');
            $table->string('conditonname');
            $table->string('totalseat');
            $table->string('status')->nullable();
            $table->string('addedby')->nullable();
            $table->string('route')->nullable();
            $table->string('price')->nullable();
            $table->string('rating')->nullable();
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
        Schema::dropIfExists('buses');
    }
}
