<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorPrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('doctorname_prescription' , 255)->nullable();
            $table->string('doctoremail_prescription' , 255)->nullable();
            $table->string('patientname_prescription' , 255)->nullable();
            $table->string('patientemail_prescription' , 255)->nullable();
            $table->string('patientapoitmentdate_prescription' , 255)->nullable();
            $table->string('patientslot_prescription' , 255)->nullable();
            $table->string('patientphonenumber_prescription' , 255)->nullable();
            $table->text('doctor_detailprescription')->nullable();
            $table->string('medicine_prescription' , 1000)->nullable();
            $table->string('nextapoitment_prescription' , 255)->nullable();
            $table->string('empty1')->nullable();
            $table->string('empty2')->nullable();
            $table->string('empty3')->nullable();
            $table->string('empty4')->nullable();
            $table->string('empty5')->nullable();
            $table->string('patientappoitment_id')->nullable();
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
        Schema::dropIfExists('doctor_prescriptions');
    }
}
