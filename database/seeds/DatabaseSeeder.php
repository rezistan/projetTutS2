<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Un seeder permet de pré-remplir la base de données.
     * Créer un seeder : php artisan make:seeder [Nom de la table]TableSeeder
     * (ex: php artisan make:seeder UsersTableSeeder).
     *
     * Exécuter les seeders : php artisan db:seed
     * La commande exécutera tous les seeders renseignés dans la fonction run de cette classe.
     * Prendre exemple sur les seeders déjà existants pour la syntaxe.
     *
     * Pour mieux comprendre, se référer à la documentation: https://laravel.com/docs/5.4/seeding
     */

    /**
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
    }
}
