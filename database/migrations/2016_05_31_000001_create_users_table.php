<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email', 128)->unique()->index();
            $table->string('password', 128);
            $table->string('first_name', 64);
            $table->string('last_name', 64)->nullable();
            $table->string('phone', 16)->nullable();
            $table->date('dob')->nullable();
            $table->string('profile_picture', 512)->nullable();
            $table->enum('sex', ['male', 'female'])->nullable();
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::drop('users');
    }
}
