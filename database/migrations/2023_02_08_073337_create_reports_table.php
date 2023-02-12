<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_id');
            $table->string('date_of_incident');
            $table->string('location');
            $table->string('witnessed_by');
            $table->string('phone_number_of_witness');
            $table->string('brief_statement');
            $table->string('upload_image');
            $table->string('report');
            $table->string('date');
            $table->string('number_plate');
            $table->string('mileage');
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
        Schema::dropIfExists('reports');
    }
}
