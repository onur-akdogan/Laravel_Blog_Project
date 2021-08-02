<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunlerTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urunler_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('urunFotoUrl',255)->nullable();
            $table->string('videoId',255)->nullable();
            $table->string('urunIsim',255)->nullable();
            $table->string('urunAltBaslik',255)->nullable();
            $table->text('urunIcerik')->nullable();
            $table->string('urunanahtarkelime',255)->nullable();
            $table->string('urunAciklama',255)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('onecikar')->default(0);
            $table->bigInteger('kategoriId')
                ->unsigned();

            $table->foreign('kategoriId')
                ->references('id')
                ->on('kategori')
                ->onDelete('cascade');

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
        Schema::dropIfExists('urunler_tabel');
    }
}
