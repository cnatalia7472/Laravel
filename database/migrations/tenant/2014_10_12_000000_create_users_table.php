<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->dateTime('last_login')->nullable($value = true);
            $table->ipAddress('last_login_ip')->nullable($value = true);
            $table->string('last_login_host')->nullable($value = true);
            $table->string('language');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('email_optout')->default(0);
            $table->tinyInteger('email_verified')->default(0);
            $table->rememberToken();
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
}
