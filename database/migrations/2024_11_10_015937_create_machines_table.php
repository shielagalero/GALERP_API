<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {

        $table->id();
        $table->string('machine_name');
        $table->date('manufactured_date');
        $table->string('brand');
        $table->string('model');
        $table->integer('power_rating');
        $table->integer('rpm');
        $table->text('description')->nullable();
        $table->unsignedBigInteger('manufacturing_address_id'); // Foreign key
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
        Schema::dropIfExists('machines');
    }
}
