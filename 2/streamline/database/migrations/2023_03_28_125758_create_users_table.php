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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',100)->unique();
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('phone_number',10)->nullable();
            // add a column to store the role id
            $table->integer('role_id')->unsigned();
            // add a foreign key to the roles table
            $table->foreign('role_id')->references('id')->on('roles');
            
            
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
        Schema::dropIfExists('users');
    }
};
