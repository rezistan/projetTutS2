<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityGroupsTable extends Migration
{
    /**
     * Les migrations permettent, d'organiser la structure de nos tables, sans passer par du SQL.
     * up() => lors de la construction de la table
     * down() => lors de la destruction de la table
     *
     * Schema::create() => créer une table.
     * Schema::table() => modifier une table existante.
     * Schema::dropIfExists() => supprime la table, si elle existe.
     *
     * En ce qui concerne les commandes utilisables, en voici quelques unes qui pourront servir :
     * php artisan make:migration [verbe_nom_table] => créer une migration (ex: php artisan make:migration create_users_table)
     * php artisan migrate => lance les migrations sur la base de données.
     * php artisan migrate:reset => lance le processus inverse.
     * php artisan migrate:refresh --seed => execute les trois commandes à la suite :
     *      php artisan migrate:reset,
     *      php artisan migrate,
     *      php artisan db:seed
     *
     * On respectera les conventions suivantes :
     * - Dans up() : d'abord définir la table, puis ses clés étrangères.
     * - Dans down() : d'abord supprimer les clés étrangères, puis la table.
     * - Si on s'aperçoit que dans une ancienne migration, un paramètre manque, mieux vaut en créer une nouvelle.
     * (on utilisera Schema::table() dans up())
     * - Si l'on créé la migration manuellement (notamment pour l'ajout de clés étrangères), choisir un nom explicite,
     * sans ambiguité (ex: add_users_job => on ajoute le job des utilisateurs)
     *
     * Pour mieux comprendre, se référer à la documentation: https://laravel.com/docs/5.4/migrations
     */


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('activity_id');
            $table->timestamps();

            $table->foreign('user_id', 'fk_group_user')->references('id')->on('users');
            $table->foreign('activity_id', 'fk_group_activity')->references('id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activity_groups', function(Blueprint $table) {
            $table->dropForeign('fk_group_activity');
            $table->dropForeign('fk_group_user');
        });
        Schema::dropIfExists('activity_groups');
    }
}
