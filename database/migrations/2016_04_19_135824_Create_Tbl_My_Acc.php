<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMyAcc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Tbl_My_Acc', function (Blueprint $table) {
            $table->increments('Id_account');
            $table->string('Email',20)->unique();
            $table->string('Password',10);
            $table->string('Name',20);
            $table->date('DOB');
            $table->string('Gender',10);
            $table->integer('Mobile_phone');
            $table->integer('Other_phone');
            $table->text('Residing_address');
            $table->string('City',20);
            $table->string('Country',20);
            $table->string('Nationality',20);
            $table->integer('Postal_code');
            $table->string('State',50);
            $table->string('Permanent_resident',50);
            $table->string('Identification',10);
            $table->string('Identification_no',50);
            $table->binary('Picture');
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
        Schema::drop('Tbl_My_Acc');
    }
}
