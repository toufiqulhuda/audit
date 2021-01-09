<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportissueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportissue', function (Blueprint $table) {
            $table->increments('issue_id');
            $table->integer('catid');
            $table->integer('ques_id');
            $table->integer('branchid');
            $table->string('follow_up');
            $table->string('pages');
            $table->string('sl_no');
            $table->integer('rectify');
            $table->string('lapses');
            $table->integer('isactive')->default('1');
            $table->integer('created_by');
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
        Schema::dropIfExists('reportissue');
    }
}
