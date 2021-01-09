<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch', function (Blueprint $table) {
             $table->increments('branchid');
             $table->integer('branch_code')->unique();
             $table->string('branch_name')->unique();
             $table->string('branch_contact');
             $table->string('branch_address');
             $table->string('branch_email');
             $table->string('SWIFT')->nullable();
             $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('branch');
    }
}
