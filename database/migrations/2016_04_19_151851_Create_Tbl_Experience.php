<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblExperience extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tbl_Experience', function (Blueprint $table) {
            $table->integer('Id_account');
            $table->increments('Id_experience');
            $table->string('Position_title',20);
            $table->string('Company_name',20);
            $table->date('Joined_duration');
            $table->date('Until');
            $table->string('Specialization',50);
            $table->string('Role',20);
            $table->string('Country',20);
            $table->string('State',20);
            $table->string('Industry',50);
            $table->string('Position_level',50);
            $table->decimal('Monthly_salary',10,2);
            $table->text('Exp_desc');
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
        Schema::drop('Tbl_Experience');
    }
}
