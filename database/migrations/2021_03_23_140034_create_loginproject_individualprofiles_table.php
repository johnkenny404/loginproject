<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginprojectIndividualprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loginproject_individualprofiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('loginproject_id');
            $table->string('loginproject_name');
            $table->foreign("loginproject_id")->references("id")->on("loginprojects")->cascadeOnDelete();
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
        Schema::dropIfExists('loginproject_individualprofiles');
    }
}
