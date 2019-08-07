<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
	        $table->integer('tutor_id');
	        $table->string('dob');
	        $table->string('qualification');
	        $table->integer('experience');
	        $table->string('gender');
	        $table->string('available_in');
	        $table->string('travel_by');
	        $table->string('Photo_path');
	        $table->string('degree_path');
	        $table->string('id_path');
	        $table->string('plan')->default('Basic');
	        $table->string('school_teacher');
	        $table->string('educational_degree');
	        $table->text('permanent_address');
	        $table->text('subjects');
	        $table->text('class');
	        $table->text('instruction_medium');
	        $table->text('board');
	        $table->string('travel_range');

	        $table->string('working_as');
	        $table->string('status')->default('pending');
	        $table->integer('jobsDone')->default(0);
	        $table->integer('jobsApplied')->default(0);
	        $table->integer('wallet')->default(0);
	        $table->string('premium')->default('NO');









        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutors_details');
    }
}
