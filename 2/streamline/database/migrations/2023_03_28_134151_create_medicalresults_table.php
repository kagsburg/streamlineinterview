<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalresults', function (Blueprint $table) {
            $table->id();
            $table->integer('medicalrecord_id')->unsigned()->index();
            $table->integer('labresult_id')->unsigned()->index();
            $table->foreign('labresult_id')->references('id')->on('labresults');
            $table->foreign('medicalrecord_id')->references('id')->on('medicalrecords');
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
        Schema::dropIfExists('medicalresults');
    }
};
