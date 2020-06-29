<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('address', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('house_no');
            $table->string('street_no');
            $table->string('muhalla');
            $table->string('state');
            $table->string('city');
            $table->string('nearby');
            $table->string('pincode');
            $table->string('email')->nullable();
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
        //
    }
}
