<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('siteName')->nullable();
            $table->text('slogan')->nullable();
            $table->text('anahtarkelime')->nullable();
            $table->text('aciklama')->nullable();
            $table->string('mail')->nullable();
            $table->string('telefon')->nullable();
            $table->string('fax')->nullable();
            $table->text('adres')->nullable();
            $table->text('hakkimizda')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
