<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('organization_id');
            $table->string('domain_name');
            $table->string('domain_tld');
            $table->string('registrar')->nullable();
            $table->date('registration_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->string('status')->nullable();
            $table->string('name_server_1')->nullable();
            $table->string('name_server_2')->nullable();
            $table->string('name_server_3')->nullable();
            $table->string('name_server_4')->nullable();
            $table->string('name_server_5')->nullable();
            $table->string('name_server_6')->nullable();
            $table->string('name_server_7')->nullable();
            $table->string('name_server_8')->nullable();
            $table->longText('raw_whois')->nullable();
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
        Schema::dropIfExists('domains');
    }
}
