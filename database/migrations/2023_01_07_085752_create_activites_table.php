<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->date('date');
            $table->time('duree');
            $table->unsignedBigInteger('technicien_id');
            $table->foreign('technicien_id')
                ->references('id')
                ->on('techniciens')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('tache_id');
            $table->foreign('tache_id')
                ->references('id')
                ->on('taches')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('etat_id');
            $table->foreign('etat_id')
                ->references('id')
                ->on('etats')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('activites');
    }
}
