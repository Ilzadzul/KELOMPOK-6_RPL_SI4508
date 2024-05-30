<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('job_locations', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('sub_district');
            $table->string('setpoint');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_locations');
    }
}
