<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomUnavailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_unavailabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('room_id');
            $table->string('reason');
            $table->timestamps();
            $table->timestamp('ended_at')->nullable();

            $table->foreign('room_id', 'fk_room_unavailability_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_unavailabilities', function(Blueprint $table) {
            $table->dropForeign('fk_room_unavailability_user');
        });

        Schema::dropIfExists('room_unavailabilities');
    }
}
