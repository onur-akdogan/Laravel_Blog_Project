<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->string('mesajName')->nullable();
            $table->string('gonderenisim')->nullable();
            $table->string('gonderenmail')->nullable();
            $table->string('mesajKonu')->nullable();
            $table->text('mesajContent')->nullable();
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
        Schema::dropIfExists('message');
    }
}
