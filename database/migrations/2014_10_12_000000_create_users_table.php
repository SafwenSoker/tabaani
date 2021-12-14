<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('numero_telephone', 12);
            $table->string('pseudo');
            $table->string('profession');
            $table->integer('age');
            $table->integer('nombre_enfants');
            $table->integer('nombre_freres_soeurs');
            $table->integer('disponibilite_jours_emploi');
            $table->integer('disponibilite_weekend');
            $table->enum('genre', ["Homme", "Femme"]);
            $table->enum('etat_civil', ["Mariée", "Divorcée", "Celibataire"]);
            $table->enum('statut', ["Employée", "Etudiant"]);
            $table->enum('genre_film_prefere', ["Comedie", "Romance", "Action", "autre"]);
            $table->enum('genre_music_prefere', ["Rock", "Rap", "Jazz", "Pop", "Folk", "autre"]);
            $table->enum('choix_preferee', ["Individuel", "En famille", "En groupe d amis"]);
            $table->enum('passion_lecture', ["Oui", "Non"]);
            $table->enum('jeux_intellecuel', ["Damme", "Jeux de cartes", "Echecs", "Autre"]);
            $table->enum('video_games', ["FIFA22", "PRO22", "Battlefield", "Fortnite", "League Of Legends", "CS-GO", "Autre"]);
            $table->enum('temps_passe_en_jeux', ["1-2 heures", "2-4 heures", "4-6 heures", "6-8 heures", "8-12 heures"]);
            $table->enum('sport_preferee', ["Foot", "Natation", "Hand", "Basket", "Tennis", "Autre"]);
            $table->enum('calme_zone', ["Fôret", "Mer", "Autre"]);
            $table->integer('shopping_par_mois');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
