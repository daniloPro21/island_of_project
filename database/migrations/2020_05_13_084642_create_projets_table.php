<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->string('titre');
            $table->longText('solution');
            $table->string('dure');
            $table->longText('description');
            $table->longText('probleme');
            $table->string('stade');
            $table->string('nature');
            $table->string('site');
            $table->string('video');
            $table->longText('equipes');
            $table->string('categorie');
            $table->integer('nbr')->default(0);
            $table->unsignedBigInteger('user_id')->index();
            $table->timestamps();
        });

        Schema::table('projets', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
