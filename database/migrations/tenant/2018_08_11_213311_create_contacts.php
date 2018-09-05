<?php
/**
 * Copyright © 2018 Panobit, Inc - All rights reserved.
 * Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
 * Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
 * Panobit, Inc | legal@panobit.com | www.panobit.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->uuid('id');

            // Company
            $table->integer('organization_id')->nullable();
            $table->integer('site_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('assistant')->nullable();
            $table->integer('reports_to')->nullable();

            // Name
            $table->string('salutation')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('name_suffix')->nullable();

            // Phone Numbers
            $table->string('pn_direct')->nullable();
            $table->string('pn_direct_ext')->nullable();
            $table->string('pn_mobile')->nullable();
            $table->string('pn_mobile_ext')->nullable();
            $table->string('pn_pager')->nullable();
            $table->string('pn_pager_ext')->nullable();
            $table->string('pn_company')->nullable();
            $table->string('pn_company_ext')->nullable();
            $table->string('pn_site')->nullable();
            $table->string('pn_site_ext')->nullable();
            $table->string('pn_other')->nullable();
            $table->string('pn_other_ext')->nullable();


            // Fax Numbers
            $table->string('fn_direct')->nullable();
            $table->string('fn_direct_ext')->nullable();
            $table->string('fn_home')->nullable();
            $table->string('fn_home_ext')->nullable();
            $table->string('fn_site')->nullable();
            $table->string('fn_site_ext')->nullable();
            $table->string('fn_department')->nullable();
            $table->string('fn_department_ext')->nullable();
            $table->string('fn_other')->nullable();
            $table->string('fn_other_ext')->nullable();

            // E-mail Addresses
            $table->string('email_personal')->nullable();
            $table->string('email_work')->nullable();
            $table->string('email_private')->nullable();
            $table->string('email_other')->nullable();

            // Personal Profile
            $table->string('nickname')->nullable();
            $table->date('birthday')->nullable();
            $table->string('significant_other')->nullable();
            $table->date('anniversary')->nullable();
            $table->tinyinteger('is_married')->nullable();
            $table->tinyinteger('has_children')->nullable();
            $table->longText('has_children_names')->nullable();
            $table->string('college_name')->nullable();
            $table->string('high_school_name')->nullable();

            // Personal Address
            $table->string('pa_address_line1')->nullable();
            $table->string('pa_address_line2')->nullable();
            $table->string('pa_city')->nullable()->nullable();
            $table->string('pa_state_province_region')->nullable();
            $table->string('pa_zip_postal_code')->nullable();
            $table->string('pa_country')->nullable();

            // Company Address
            $table->string('ca_address_line1')->nullable();
            $table->string('ca_address_line2')->nullable();
            $table->string('ca_city')->nullable()->nullable();
            $table->string('ca_state_province_region')->nullable();
            $table->string('ca_zip_postal_code')->nullable();
            $table->string('ca_country')->nullable();


            // Social Media
            $table->string('sm_linkedin')->nullable();
            $table->string('sm_facebook')->nullable();
            $table->string('sm_twitter')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
