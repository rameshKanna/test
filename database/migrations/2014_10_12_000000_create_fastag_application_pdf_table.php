<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFastagApplicationPdfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fastag_app_pdf', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fastag_no')->default('NULL');
            $table->string('customer_name')->default('NULL');
            $table->string('dob')->default('NULL');
            $table->string('pan')->default('NULL');
            $table->string('aadhaar')->default('NULL');
            $table->string('mobile_number')->default('NULL');
            $table->string('vehicle_number')->default('NULL');
            $table->string('vehicle_class')->default('NULL');
            $table->string('commercial')->default('NULL');
            $table->string('tag_id')->default('NULL');
            $table->string('tag_cost')->default('NULL');
            $table->string('security_deposit')->default('NULL');
            $table->string('min_bal')->default('NULL');
            $table->string('con_fee')->default('NULL');
            $table->string('recharge_amount')->default('NULL');
            $table->string('total_cost')->default('NULL');
            $table->string('documents')->default('NULL');
            $table->string('pass_category')->default('NULL');
            $table->string('activation_date')->default('NULL');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fastag_app_pdf');
    }
}
