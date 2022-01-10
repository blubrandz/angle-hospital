<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('username_timeslot')->nullable();
            $table->string('useremail_timeslot')->nullable();
            $table->string('pateintappo_doctorname')->nullable();
            $table->string('pateintappo_doctordate')->nullable();
            $table->string('pateintappo_doctortimeslot')->nullable();
            $table->enum('patientappo_status', ['approved', 'deny'])->nullable();
            $table->string('username_empty')->nullable();
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
        Schema::dropIfExists('patient_appointments');
    }
}
