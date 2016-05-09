<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblEducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tbl_Education', function (Blueprint $table) {
            $table->integer('Id_account');
            $table->increments('Id_education');
            $table->string('Institute',20);
            $table->date('Grad_date');
            $table->string('Qualification',30);
            $table->string('Institute_loc',20);
            $table->string('Field_of_Study',50);
            $table->string('Major',20);
            $table->string('Grade',10);
            $table->decimal('Score',5);
            $table->decimal('Score_out_of',5);
            $table->text('Add_info');
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
        Schema::drop('Tbl_Education');
    }
}
