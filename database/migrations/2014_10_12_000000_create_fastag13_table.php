<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFastag13Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fastag_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name')->default('NULL');
            $table->string('first_name')->default('NULL');
            $table->string('middle_name')->default('NULL');
            $table->string('gender')->default('NULL');
            $table->string('DOB')->default('NULL');
            $table->string('mother_name')->default('NULL');
            $table->string('father_name')->default('NULL');
            $table->string('martial_status')->default('NULL');
            $table->string('bank')->default('NULL');
            $table->string('bank_account_no')->default('NULL');
            $table->string('bank_customer_id')->default('NULL');
            $table->string('address_type')->default('NULL');
            $table->string('flatno')->default('NULL');
            $table->string('premises')->default('NULL');
            $table->string('street')->default('NULL');
            $table->string('area')->default('NULL');
            $table->string('city')->default('NULL')
            $table->string('state')->default('NULL');
            //$table->string('country')->default('NULL');
            $table->string('pin')->default('NULL');
            $table->string('email')->default('NULL');
            $table->string('mobile_number')->default('NULL');
            $table->string('id_proof')->default('NULL');
            $table->string('address_proof')->default('NULL');
            $table->string('id_proof_number')->default('NULL');
            $table->string('id_proof_expiry_date')->default('NULL');
            $table->string('address_proof_number')->default('NULL');
            $table->string('address_proof_expiry_date')->default('NULL');
            $table->string('occupation_type')->default('occupation_type');
            $table->string('residential_status')->default('residential_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fastag_list');
    }
}
