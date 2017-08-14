<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUnavailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_unavailabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('reason');
            $table->timestamps();
            $table->timestamp('ended_at')->nullable();

            $table->foreign('user_id', 'fk_user_unavailability_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_unavailabilities', function(Blueprint $table) {
            $table->dropForeign('fk_user_unavailability_user');
        });

        Schema::dropIfExists('user_unavailabilities');
    }
}
