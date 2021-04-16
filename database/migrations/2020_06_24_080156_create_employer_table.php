<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('employer_id');
            $table->string('employer_name');
            $table->string('address');
            $table->integer('city');
            $table->string('phoneNumber');
            $table->string('business_paper');
            $table->string('avatar');
            $table->string('employer_description');
            $table->integer('employer_total_job');
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
        Schema::dropIfExists('employers');
    }
}
