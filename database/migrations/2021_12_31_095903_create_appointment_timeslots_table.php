<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTimeslotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_timeslots', function (Blueprint $table) {
            $table->id();
            $table->string('username_timeslot')->nullable();
            $table->string('useremail_timeslot')->nullable();
            $table->string('selectdate_timeslot')->nullable();
            $table->string('starting_time_timeslot')->nullable();
            $table->string('ending_time_timeslot')->nullable();
            $table->string('empty_timeslot')->nullable();
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
        Schema::dropIfExists('appointment_timeslots');
    }
}
