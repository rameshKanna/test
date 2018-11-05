<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormData2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_data_element', function (Blueprint $table) {
            $table->increments('form_data_id');
            $table->string('form_id')->default('NULL');
            $table->string('page')->default('NULL');
            $table->string('line')->default('NULL');
            $table->string('item')->default('NULL');
            $table->string('type')->default('NULL');
            $table->string('bank_name')->default('NULL');
            $table->string('text_name')->default('NULL');
            $table->string('x')->default('NULL');
            $table->string('y')->default('NULL');
            $table->string('width')->default('NULL');
            $table->string('length')->default('NULL');
                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_data_element');
    }
}
