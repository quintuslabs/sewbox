<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_name');
            $table->string('staff_phone');
            $table->string('staff_email');
            $table->string('staff_sex');
            $table->text('staff_address');
            $table->integer('staff_salary');
            $table->integer('staff_delete')->default('0');   
            $table->string('alt_phone')->nullable();
            $table->string('dob')->nullable();                
            $table->string('doj')->nullable();                            
            $table->string('profile_image')->nullable();                            
            $table->text('pan_card')->nullable();
            $table->text('adhar_card')->nullable();
            $table->text('electric_bill')->nullable();
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
        Schema::dropIfExists('staff');
    }
}
