<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachine1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine1', function (Blueprint $table) {
            $table->id();
            $table->string('machine_name');
            $table->date('manufactured_date');
            $table->string('brand');
            $table->string('model');
            $table->integer('power_rating');
            $table->integer('rpm');
            $table->text('description')->nullable();
            $table->foreignId('manufacturing_address_id')->constrained('manufacturing_addresses');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('machine1');
    }
}