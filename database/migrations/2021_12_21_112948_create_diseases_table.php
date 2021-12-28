<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->string('disease_name')->nullable();
            $table->text('disease_description')->nullable();
            $table->string('disease_image')->nullable();
            $table->string('disease_video')->nullable();
            $table->string('disease_empty1')->nullable();
            $table->string('disease_empty2')->nullable();
            $table->string('disease_empty3')->nullable();
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
        Schema::dropIfExists('diseases');
    }
}
