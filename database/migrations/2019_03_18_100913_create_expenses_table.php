<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branch_id')->unsigned();
            $table->integer('expense_type_id')->unsigned();
            $table->string('fabric_expenses')->nullable();
            $table->string('accessories_expenses')->nullable();
            $table->string('stitching_expenses')->nullable();
            $table->string('date');
            $table->string('amount');
            $table->text('comment');
            $table->timestamps();

            $table->foreign('branch_id')->references('id')->on('master_branch')->onDelete('cascade');
            $table->foreign('expense_type_id')->references('id')->on('expense_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
