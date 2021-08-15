<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_assessments', function (Blueprint $table) {
            $table->id();
            $table->string('user_Id');
            $table->string('student_Id')->unique();
            $table->string('student_name');
            $table->string('mathematics1');
            $table->string('mathematics2');
            $table->string('english1');
            $table->string('english2');
            $table->string('nve1');
            $table->string('nve2');
            $table->string('bTech1');
            $table->string('bTech2');
            $table->string('busStudies1');
            $table->string('busStudies2');
            $table->string('preVocStudies1');
            $table->string('preVocStudies2');
            $table->string('hausa1')->nullable();
            $table->string('hausa2')->nullable();
            $table->string('yoruba1')->nullable();
            $table->string('yoruba2')->nullable();
            $table->string('igbo1')->nullable();
            $table->string('igbo2')->nullable();
            $table->string('crs1')->nullable();
            $table->string('crs2')->nullable();
            $table->string('irs1')->nullable();
            $table->string('irs2')->nullable();
            $table->string('cca1')->nullable();
            $table->string('cca2')->nullable();
            $table->string('french1')->nullable();
            $table->string('french2')->nullable();
            $table->string('arabic1')->nullable();
            $table->string('arabic2')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('subject_assessments');
    }
}
