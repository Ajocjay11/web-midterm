<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectionSurviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('election_survies', function (Blueprint $table) {
            $table->id();
            $table->string('president');
            $table->string('senator');
            $table->string('mayor');
            $table->string('congressman');
            $table->string('barangay_captain');
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
        Schema::dropIfExists('election_survies');
    }
}
