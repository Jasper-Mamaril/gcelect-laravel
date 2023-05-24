<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partylists', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('partylist_name')->default('Independent');
            $table->LongText('partylist_logo')->default('None');
            $table->LongText('partylist_status')->default('insert');
            $table->timestamp('partylist_verfied_at')->nullable();
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
        Schema::dropIfExists('partylists');
    }
}
