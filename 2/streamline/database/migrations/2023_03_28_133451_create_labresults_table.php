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
        Schema::create('labresults', function (Blueprint $table) {
            $table->increments('id');
            $table->string('result_value');
            $table->integer('labtest_id')->unsigned()->index();
            $table->string('result_comment');         
            $table->integer('created_by')->unsigned()->index();
            $table->integer('updated_by')->unsigned()->index()->nullable();
            $table->foreign('labtest_id')->references('id')->on('labtests'); 
            $table->foreign('created_by')->references('id')->on('users');   
            $table->foreign('updated_by')->references('id')->on('users');
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
        Schema::dropIfExists('labresults');
    }
};
