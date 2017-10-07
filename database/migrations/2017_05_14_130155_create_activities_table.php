<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('task_id');
            $table->unsignedInteger('room_id');

            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();

            $table->foreign('task_id', 'fk_activity_task')->references('id')->on('tasks');
            $table->foreign('room_id', 'fk_activity_room')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activities', function(Blueprint $table) {
            //$table->dropForeign('fk_activity_group');
            $table->dropForeign('fk_activity_room');
            $table->dropForeign('fk_activity_task');
        });

        Schema::dropIfExists('activities');
    }
}
