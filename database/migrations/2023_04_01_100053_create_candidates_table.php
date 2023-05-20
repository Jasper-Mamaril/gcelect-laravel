<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('candidate_fname');
            $table->string('candidate_lname');
            $table->BigInteger('position_id')->unsigned();
            $table->foreign('position_id')->references('id')->on('positions');
            $table->BigInteger('partylist_id')->unsigned();
            $table->foreign('partylist_id')->references('id')->on('partylists');
            // $table->string('partylist_name');

            $table->string('candidate_program');
            $table->string('candidate_yrlevel');
            $table->LongText('candidate_picture')->nullable();
            $table->timestamp('candidate_verified_at')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
