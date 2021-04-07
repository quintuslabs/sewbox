<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_branch', function (Blueprint $table) {
             $table->increments('id');
             $table->string('branch_name');
             $table->text('branch_address');
             $table->string('branch_phone');
             $table->string('branch_alt_phone')->nullable();
             $table->string('branch_email');
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
        Schema::dropIfExists('master_branch');
    }
}
