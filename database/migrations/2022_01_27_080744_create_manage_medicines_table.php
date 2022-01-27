<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_medicines', function (Blueprint $table) {
            $table->id();
            $table->string('username' , 255)->nullable();
            $table->string('useremail' , 255)->nullable();
            $table->string('userid' , 255)->nullable();
            $table->string('medicine_name' , 255)->nullable();
            $table->string('medicine_note' , 255)->nullable();
            $table->enum('medicine_status', ['available','unavailable'])->nullable();
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
        Schema::dropIfExists('manage_medicines');
    }
}
