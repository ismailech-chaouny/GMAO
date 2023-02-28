<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipements', function (Blueprint $table) {
            $table->id();
            $table->string('designation', 100);
            $table->text('description');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->date('date_debut');
            $table->double('prix');
            $table->string('marque', 100);
            $table->string('reference', 100);
            $table->boolean('pieceRechanger');
            $table->string('document', 100);
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('image', 100);
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
        Schema::dropIfExists('equipements');
    }
}
