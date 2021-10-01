<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->unsignedBigInteger('religion_id');
            $table->string('email');
            $table->string('phone');
            $table->string('identity_number');
            $table->string('identity_file');
            $table->unsignedBigInteger('bank_id');
            $table->string('bank_account');
            $table->text('address');
            $table->unsignedBigInteger('education_id');
            $table->unsignedBigInteger('university_id')->nullable();
            $table->string('university_other');
            $table->string('major');
            $table->string('graduation_year')->nullable();
            $table->tinyInteger('in_college')->nullable();
            $table->string('semester')->nullable();
            $table->text('skill');
            $table->string('file_cv');
            $table->string('file_photo');
            $table->string('file_portofolio');
            $table->unsignedBigInteger('source_information_id')->nullable();
            $table->text('source_information_other')->nullable();
            $table->integer('rangking')->nullable();
            $table->integer('assessment_score')->nullable();
            $table->tinyInteger('mail_sent');
            $table->unsignedBigInteger('candidate_status_id');
            $table->timestamps();

            // $table->foreign('religion_id')->references('id')->on('religions')->onDelete('cascade');
            // $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
            // $table->foreign('education_id')->references('id')->on('education')->onDelete('cascade');
            // $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
            // $table->foreign('source_information_id')->references('id')->on('source_information')->onDelete('cascade');
            // $table->foreign('candidate_status_id')->references('id')->on('candidate_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
