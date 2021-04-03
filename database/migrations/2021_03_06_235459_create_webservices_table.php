<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webservices', function (Blueprint $table) {
            $table->bigIncrements('webservice_id');
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->string('typeservice');
            $table->string('budget');
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
        Schema::dropIfExists('webservices');
    }
}
