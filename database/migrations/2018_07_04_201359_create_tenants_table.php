<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('website_id', 32);
            $table->string('company_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('city')->nullable()->nullable();
            $table->string('state_province_region')->nullable();
            $table->string('zip_postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('website')->nullable();
            $table->string('email');
            $table->string('licensed_to')->nullable();
            $table->string('license_type')->nullable();
            $table->date('license_start')->nullable();
            $table->date('license_end')->nullable();
            $table->integer('licensed_users')->default(0);
            $table->integer('licensed_organizations')->default(0);
            $table->integer('limit_diskspace')->default(0);
            $table->integer('limit_database_size')->default(0);
            $table->string('custom_domain')->default('No');
            $table->tinyInteger('status_code')->default(0);
            $table->longText('notes')->nullable();
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
        Schema::dropIfExists('tenants');
    }
}
