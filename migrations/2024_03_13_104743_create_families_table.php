<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('fno');
            $table->string('family_head_name');
            $table->string('family_photo');
            $table->string('slno');
            $table->string('family_member_name');
            $table->string('gender');
            $table->string('relation');
            $table->string('occupation');
            $table->string('dob');
            $table->string('marriage_date');
            $table->string('baptism_date');
            $table->string('mobile');
            $table->string('ad_no');
            $table->string('joining_date');
            $table->string('member_status');
            $table->string('member_saved');
            $table->string('member_photo');
            $table->string('street');
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
        Schema::dropIfExists('families');
    }
}
